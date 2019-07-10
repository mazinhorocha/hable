<html>
<head>
    <title>Solicitação de Contato</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>
<body>
<table align="center" border="1">
    <tbody>
    <tr>
        <td>Nome</td>
        <td>{{$nome}}</td>
    </tr>
    <tr>
        <td>Telefone</td>
        <td>{{$numero}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>Data de Envio</td>
        <td>{{$data_envio}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>