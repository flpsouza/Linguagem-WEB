<html>
    <body>
        <h1> Produto </h1>
        <p> Modulo de produto contendo informações sobre o mesmo para o cadastro no site </p>
        <h2> Lista </h2>
        <table>
            <tr>
                <th> CodigoDoProduto </th>
                <th> NomeDoProduto </th>
                <th> Preço </th>
            </tr>
            <tr>
                <td> 0 </td>
                <td> MousePad </td>
                <td> R$ 50,00 </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> Teclado </td>
                <td> R$ 70,00 </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td>Mouse </td>
                <td> R$ 35,00 </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> kit upgrade </td>
                <td> R$ 2000,00 </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> webcam </td>
                <td> R$ 100,00 </td>
            </tr>
            
        </table>
        <h2> Formulario </h2>
        <form name="formCadastro" action="tela.php" method="post">
        Nome: <input type = "text" name = "nome" size = 32 maxlenght = 20/>
        <br/>
        Preço: <input type = "text" name = "preco" size = 8 maxlenght = 8/>
        <br/>
        Codigo do Produto: <input type = "text" name = "codProduto" size = 4 maxlenght = 4/>
        <br/>
        <br/>      
        Tipo: <Select name = "?">
            <option value = "Periferico"> Software </option>
            <option value = "Hardware"> Hardware </option>        
        </Select>
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        </form>
    </body>
</html>
