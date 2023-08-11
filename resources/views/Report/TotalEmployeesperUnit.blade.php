<!DOCTYPE html>
<html>
    <head>
        <title>Relatório Total de Colaboradores por Unidade</title>
    </head>
    <body>
        <h1>Relatório Total de Colaboradores por Unidade</h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Total de Colaboradores</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unidades as $unidade)
                    <tr>
                        <td>{{ $unidade->nome_fantasia }}</td>
                        <td>{{ $unidade->razao_social }}</td>
                        <td>{{ $unidade->cnpj }}</td>
                        <td>{{ $unidade->colaboradores_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>