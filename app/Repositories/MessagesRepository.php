<?php

namespace App\Repositories;

use App\Message;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class MessagesRepository
{
    private $user;
    private $message;

    // model args
    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    /**
     * Récupérer toutes les utilisateurs de conversation.
     *
     * @return mixed
     */
    public function getUsers(int $id)
    {
        $users = $this->user->newQuery()
            ->select('id', 'name', 'email', 'avatar')
            ->where('id', '<>', $id)
            ->get();
        $unread = $this->unReadCount($id);
        foreach ($users as $usr) {
            if (isset($unread[$usr->id])) {
                $usr->unread = $unread[$usr->id];
            } else {
                $usr->unread = 0;
            }
        }

        return $users;
    }

    public function create(string $content, int $user_id, int $to_id)
    {
        return $this->message->newQuery()->create([
            'content'    => $content,
            'user_id'    => $user_id,
            'to_id'      => $to_id,
            'created_at' => Carbon::now(), // date actuelle
        ]);
    }

    /**
     * Envoyer une requete pour la traiter plus tard
     * Récupérer les messages pour chaque conversation.
     *
     * @param int $from
     * @param int $to
     *
     * @return $this
     */
    public function getMessages(int $from, int $to) : Builder
    {
        return $this->message->newQuery()
            ->whereRaw("((user_id = $from AND to_id = $to) OR (user_id = $to AND to_id = $from))")
            ->orderBy('created_at', 'DESC')
            ->with('user'); // utilisateur en relation
    }

    /**
     * Récupérer le nombre des messages non lues pour chaque conversation
     * [
     *  'userid' => nombre message non lues
     * ].
     */
    public function unReadCount(int $userId)
    {
      
        return $this->message->newQuery()
            ->where('to_id', $userId)
            ->groupBy('user_id')
            ->selectRaw('user_id, COUNT(id) as count')
            ->whereRaw('updated_at IS NULL')
            ->get()
            ->pluck('count', 'user_id');   //tableau associatif
    }

    public function readAllFrom(int $from, int $to)
    {
        return $this->message->newQuery()
                ->where('user_id', $from)
                ->where('to_id', $to)
                ->update(['updated_at' => Carbon::now()]);
    }
}
