<html>
<head>
    <meta charset="UTF-8">
    <script src="assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/principal.css">

    <script>
        $(document).ready(function (){
            $("#abas ul li").addClass("selecionado");
            $("#abas ul li").click(function (){


                $(this).toggleClass("selecionado");
                //Guarda o id de quem eu cliquei
                var id = $(this).attr("id");
                $("."+id).toggle();

            });
        });
        </script>
</head>
<body>
        <div id="abas">
            <ul>
                <li id="aba1" > 1 TAB1 </li>
                <li id="aba2" > 2 TAB2</li>
                <li id="aba3" > 3 TAB3</li>
            </ul>
        </div>
        <div id="conteudos">
                <div class= "conteudo aba1">
                     conteudo aba 1
                </div>
                <div class= "conteudo aba2">
                     conteudo aba 2
                </div>
                <div class= "conteudo aba3">
                    conteudo aba 3
            </div>

        </div>
</body>

</html>
