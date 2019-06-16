{foreach from=$OFICINAS item=O}
    <p>{$O.ofc_id}</p>
    <p>{$O.ofc_nome}</p>
    <p>{$O.ofc_descricao}</p>
    <p>{$O.ofc_logo}</p>
    <p>{$O.ofc_email}</p>
    <p>{$O.ofc_pass}</p>
    <p>{$O.ofc_telefone}</p>
    <p>{$O.ofc_celular}</p>
    <p>{$O.ofc_site}</p>
    <p>{$O.ofc_endereco}</p>
    <p>{$O.ofc_numero}</p>
    <p>{$O.ofc_complemento}</p>
    <p>{$O.ofc_bairro}</p>
    <p>{$O.ofc_cidade}</p>
    <p>{$O.ofc_uf}</p>
    <p>{$O.lat}</p>
    <p>{$O.lng}</p>

{/foreach}