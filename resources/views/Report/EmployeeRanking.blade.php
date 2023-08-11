<!DOCTYPE html>
<html>
    <head>
        <title>Relatório Ranking de Melhores Avaliados</title>
    </head>
    <body>
        <h1>Relatório Ranking de Melhores Avaliados</h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Unidade</th>
                    <th>Cargo</th>
                    <th>Nota de Desempenho</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colaboradores as $colaborador)
                    <tr>
                        <td>{{ $colaborador->nome }}</td>
                        <td>{{ $colaborador->cpf }}</td>
                        <td>{{ $colaborador->email }}</td>
                        <td>{{ $colaborador->unidade->nome }}</td>
                        <td>{{ $colaborador->cargo->nome }}</td>
                        <td>{{ $colaborador->desempenhos->max('nota') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
