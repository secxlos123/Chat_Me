<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

   
'accept' => 'The: Atribut harus diterima.',
    'active_url' => 'Atribut: bukan URL yang valid.',
    'after' => 'Atribut: harus berupa tanggal setelah: tanggal.',
    'after_or_equal' => 'Atribut: harus berupa tanggal setelah atau sama dengan: date.',
    'alpha' => 'Atribut: hanya dapat berisi huruf.',
    'alpha_dash' => 'Atribut: hanya dapat berisi huruf, angka, dan tanda hubung.',
    'alpha_num' => 'Atribut: hanya dapat berisi huruf dan angka.',
    'array' => 'Atribut: must a array.',
    'before' => 'Atribut: harus berupa tanggal sebelum: tanggal.',
    'before_or_equal' => 'Atribut: harus berupa tanggal sebelum atau sama dengan: date.',
    'between' => [
        'numeric' => 'Atribut: harus antara: min dan: maks.',
        'file' => 'Atribut: harus antara: min dan: maks kilobyte.',
        'string' => 'Atribut: harus antara: min dan: karakter maks.',
        'array' => 'Atribut: harus memiliki antara: min dan: item maks.',
    ],
   
'boolean' => 'Bidang: atribut harus benar atau salah.',
    'confirmed' => 'The: konfirmasi atribut tidak cocok.',
    'date' => 'Atribut: bukan tanggal yang valid.',
    'date_format' => 'Atribut: tidak cocok dengan format: format.',
    'different' => 'Atribut: dan: other harus berbeda.',
    'digit' => 'Atribut: harus: digit digit.',
    'digits_between' => 'Atribut: harus antara: min dan: max digit.',
    'dimensions' => 'Atribut: memiliki dimensi gambar tidak valid.',
    'different' => 'Bidang: atribut memiliki nilai duplikat.',
    'email' => 'Atribut: harus berupa alamat email yang valid.',
    'exist' => 'Atribut yang dipilih: tidak valid.',
    'file' => 'Atribut: must be a file.',
    'filled' => 'Bidang: atribut harus memiliki nilai.',
    'image' => 'Atribut: harus berupa gambar.',
    'in' => 'Atribut yang dipilih: tidak valid.',
    'in_array' => 'Bidang: atribut tidak ada di: other.',
    'integer' => 'Atribut: harus berupa integer.',
    'ip' => 'Atribut: harus berupa alamat IP yang valid.',
    'ipv4' => 'Atribut: harus alamat IPv4 yang valid.',
    'ipv6' => 'Atribut: harus alamat IPv6 yang valid.',
    'json' => 'Atribut: harus berupa string JSON yang valid.',
    'max' => [
        'numeric' => 'Atribut: mungkin tidak lebih besar dari: maks.',
        'file' => 'Atribut: mungkin tidak lebih besar dari: max kilobytes.',
        'string' => 'Atribut: mungkin tidak lebih besar dari: karakter maks.',
        'array' => 'Atribut: mungkin tidak memiliki lebih dari: item maks.',
    ],
   
'mimes' => 'Atribut: harus berupa file bertipe:: values.',
    'mimetypes' => 'Atribut: harus berupa file bertipe:: values.',
    'min' => [
        'numeric' => 'Atribut: setidaknya harus: min.',
        'file' => 'Atribut: setidaknya harus: min kilobytes.',
        'string' => 'Atribut: setidaknya harus: karakter min.',
        'array' => 'Atribut: harus memiliki setidaknya: item minimal.',
    ],
    'not_in' => 'Atribut yang dipilih: tidak valid.',
    'numeric' => 'Atribut: harus berupa angka.',
    'present' => 'The: Field atribut harus ada.',
    'regex' => 'Format atribut: tidak valid.',
    'required' => 'Bidang: atribut diperlukan.',
    'required_if' => 'Bidang: atribut diperlukan ketika: lainnya adalah: nilai.',
    'required_unless' => 'Bidang: atribut diperlukan kecuali: lainnya di: nilai.',
    'required_with' => 'Bidang: atribut diperlukan ketika: nilai ada.',
    'required_with_all' => 'Bidang: atribut diperlukan saat: nilai ada.',
    'required_without' => 'Bidang: atribut diperlukan saat: nilai tidak ada.',
    'required_without_all' => 'Field atribut: diperlukan ketika tidak ada: nilai ada.',
    'same' => 'Atribut: dan: lainnya harus cocok.',
    'size' => [
        'numeric' => 'Atribut: harus: size.',
        'file' => 'Atribut: harus: size kilobytes.',
        'string' => 'Atribut: harus: karakter ukuran.',
        'array' => 'Atribut: harus berisi: item ukuran.',
    ],
    'string' => 'Atribut: must a string.',
    'timezone' => 'Atribut: harus merupakan zona yang valid.',
    'unique' => 'Atribut: telah diambil.',
    'uploaded' => 'Atribut: gagal diunggah.',
    'url' => 'Format atribut: tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
