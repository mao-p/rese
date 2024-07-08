<?php

return [
    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeは有効なURLではありません。',
    'after'                => ':attributeは:dateより後の日付にしてください。',
    'after_or_equal'       => ':attributeは:date以降の日付にしてください。',
    'alpha'                => ':attributeはアルファベットのみ使用できます。',
    'alpha_dash'           => ':attributeはアルファベット、数字、ダッシュ、アンダースコアのみ使用できます。',
    'alpha_num'            => ':attributeはアルファベットと数字のみ使用できます。',
    'array'                => ':attributeは配列でなければなりません。',
    'before'               => ':attributeは:dateより前の日付にしてください。',
    'before_or_equal'      => ':attributeは:date以前の日付にしてください。',
    'between'              => [
        'numeric' => ':attributeは:min〜:maxの間で指定してください。',
        'file'    => ':attributeは:min〜:max KBの間で指定してください。',
        'string'  => ':attributeは:min〜:max文字の間で指定してください。',
        'array'   => ':attributeには:min〜:max個の項目を含めてください。',
    ],
    'boolean'              => ':attributeはtrueかfalseで指定してください。',
    'confirmed'            => ':attributeが確認用と一致しません。',
    'date'                 => ':attributeは有効な日付ではありません。',
    'date_equals'          => ':attributeは:dateと等しい日付でなければなりません。',
    'date_format'          => ':attributeの形式は:formatに合いません。',
    'different'            => ':attributeと:otherは異なる値でなければなりません。',
    'digits'               => ':attributeは:digits桁でなければなりません。',
    'digits_between'       => ':attributeは:min〜:max桁の間で指定してください。',
    'dimensions'           => ':attributeの画像サイズが無効です。',
    'distinct'             => ':attributeは重複しています。',
    'email'                => ':attributeは有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':attributeは次のいずれかで終わる必要があります: :values',
    'exists'               => '選択された:attributeは無効です。',
    'file'                 => ':attributeはファイルでなければなりません。',
    'filled'               => ':attributeは必須です。',
    'gt'                   => [
        'numeric' => ':attributeは:valueより大きい必要があります。',
        'file'    => ':attributeは:value KBより大きい必要があります。',
        'string'  => ':attributeは:value文字より長い必要があります。',
        'array'   => ':attributeには:value個より多くの項目が必要です。',
    ],
    'gte'                  => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file'    => ':attributeは:value KB以上でなければなりません。',
        'string'  => ':attributeは:value文字以上でなければなりません。',
        'array'   => ':attributeには:value個以上の項目が必要です。',
    ],
    'image'                => ':attributeは画像でなければなりません。',
    'in'                   => '選択された:attributeは無効です。',
    'in_array'             => ':attributeは:otherに存在しません。',
    'integer'              => ':attributeは整数でなければなりません。',
    'ip'                   => ':attributeは有効なIPアドレス形式でなければなりません。',
    'ipv4'                 => ':attributeは有効なIPv4アドレス形式でなければなりません。',
    'ipv6'                 => ':attributeは有効なIPv6アドレス形式でなければなりません。',
    'json'                 => ':attributeは有効なJSON文字列でなければなりません。',
    'lt'                   => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file'    => ':attributeは:value KBより小さくなければなりません。',
        'string'  => ':attributeは:value文字より短くなければなりません。',
        'array'   => ':attributeには:value個より少ない項目が必要です。',
    ],
    'lte'                  => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file'    => ':attributeは:value KB以下でなければなりません。',
        'string'  => ':attributeは:value文字以下でなければなりません。',
        'array'   => ':attributeには:value個以下の項目が必要です。',
    ],
    'max'                  => [
        'numeric' => ':attributeは:max以下でなければなりません。',
                'file'    => ':attributeは:max KB以下でなければなりません。',
        'string'  => ':attributeは:max文字以下でなければなりません。',
        'array'   => ':attributeには:max個以下の項目が含まれていなければなりません。',
    ],
    'mimes'                => ':attributeは:valuesタイプのファイルでなければなりません。',
    'mimetypes'            => ':attributeは:valuesタイプのファイルでなければなりません。',
    'min'                  => [
        'numeric' => ':attributeは:min以上でなければなりません。',
        'file'    => ':attributeは:min KB以上でなければなりません。',
        'string'  => ':attributeは:min文字以上でなければなりません。',
        'array'   => ':attributeには:min個以上の項目が含まれていなければなりません。',
    ],
    'not_in'               => '選択された:attributeは無効です。',
    'not_regex'            => ':attributeの形式が無効です。',
    'numeric'              => ':attributeは数字でなければなりません。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attributeは存在する必要があります。',
    'regex'                => ':attributeの形式が無効です。',
    'required'             => ':attributeは必須です。',
    'required_if'          => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless'      => ':otherが:valuesでない場合、:attributeは必須です。',
    'required_with'        => ':valuesが指定されている場合、:attributeは必須です。',
    'required_with_all'    => ':valuesが全て指定されている場合、:attributeは必須です。',
    'required_without'     => ':valuesが指定されていない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeは必須です。',
    'same'                 => ':attributeと:otherは一致していなければなりません。',
    'size'                 => [
        'numeric' => ':attributeは:sizeでなければなりません。',
        'file'    => ':attributeは:size KBでなければなりません。',
        'string'  => ':attributeは:size文字でなければなりません。',
        'array'   => ':attributeには:size個の項目が含まれていなければなりません。',
    ],
    'starts_with'          => ':attributeは次のいずれかで始まる必要があります: :values',
    'string'               => ':attributeは文字列でなければなりません。',
    'timezone'             => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique'               => '指定された:attributeはすでに存在します。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeは有効なURL形式でなければなりません。',
    'uuid'                 => ':attributeは有効なUUIDでなければなりません。',

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

