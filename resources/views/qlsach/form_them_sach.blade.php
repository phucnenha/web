<html>
    <head>
        <body>
            <h2> NHập thể loai </h2>
            <form action ="" method="post">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>the loai sach</td>
                    </tr>   

                    <tr>
                        <td><input type="text" size="5" name= "id"[]>/td>
                        <td><input type="text" size="5" name= "ten_the_loai"[]>/td>
                    </tr> 

                    <tr>
                    <td>colspan="2"</td>
                    <input type='submit'value="luu" name='submit'></td>
                    </tr> 

                </table>
                {{ csrf_field}}
            </form>
        </body>
    </head>
</html>
