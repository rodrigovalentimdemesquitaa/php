<!-- *** PAREI NA AULA 10 *** 
-------------------------------------------------------------------------
* PHP
    - liguagem de programação para web
    - destina-se à criação de conteúdos dinâmicos    
-------------------------------------------------------------------------
* tags
    >> <?php 
       ?>
-------------------------------------------------------------------------
* Apresentar texto
    >> echo "texto"
    >> print "texto"
-------------------------------------------------------------------------
* comentários
    >> // ou # == de uma linha
    >> /*  */ == vários linhas
-------------------------------------------------------------------------
* Variável
    - guardam dados
    - podem ser modificadas
    >> $examplevar
-------------------------------------------------------------------------
* Convenções
    >> $umaVariavel == camel case(mais usado)
    >> $uma_Variavel == snake case(mais facil de compreender)
    >> $UmaVariavel == studli case(não recomendado)
-------------------------------------------------------------------------
* Tipos de variáveis
    >> $int = 100;         
    >> $float = 10.5;           
    >> $bool = true;             
    >> $string = "olá mundo";

    >> $array = [1,2,3]; == vários valores
    >> $pessoa = new Pessoa(); == objeto com propriedade e métodos 
    >> $nulo = null    
-------------------------------------------------------------------------
* Operadores
    >> | = | == | === | + | - | * | / | % | += | -= | *= | /= |
       | != | <> | !== | > | < | >= | =< | <=> | ++ | -- | && |
       | || | 
-------------------------------------------------------------------------
* concatenação
    >> | . | .= |
-------------------------------------------------------------------------
* Caracteres de escape
    >> echo '<p>Parágrafo de HTML dentro do PHP</p>';
    - quando se tem algum dado que já possui aspas simples, devemos
      usar aspas duplas para o código ao redor dele e virce e versa
    - podemos ainda usar a barra invertida antes do apóstrofo
    >> echo 'Nesse texto \' irá aparecer o apóstrofo\' do meio';
-------------------------------------------------------------------------
* Caracteres de escape unicode
    >> echo "\u{A9}"; == copyright
    >> "\u{BC"; == 1/4
    - https://www.utf8-chartable.de/ == site dos unicodes
-------------------------------------------------------------------------
* HTML entites
    >> echo '<br>';
    >> echo '&copy';
    - https://dev.w3.prg/html5/html-author/charref == site entites



-->