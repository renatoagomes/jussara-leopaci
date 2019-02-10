<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = \App\Models\Post::create([
            'capa_url' => 'https://res.cloudinary.com/tesseract/image/upload/v1538796221/jussara/Texto_01_Depress%C3%A3o_Baby_blues.jpg',
            'slug' => 'Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa',
            'titulo' => 'Baby Blues e Depressão pós-parto não são a mesma coisa?',
            'data_publicacao' => '2018-11-06',
            'conteudo' => '<p>Baby Blues e Depressão Pós-Parto são termos bastante difundidos nas redes sociais, sites e livros sobre maternidade, gravidez e puerpério, mas os conceitos podem ser confundidos e hoje em dia, ainda observamos alguns diagnósticos precipitados. Seguem aqui, algumas reflexões e informações para que possamos pensar sobre esses fenômenos.</p>
                <p>O Baby Blues (ou tristeza puerperal) é um período normal pelo qual cerca de 80% das mulheres passam após o parto. Tristeza, irritabilidade, choro fácil, humor oscilante são sinais que aparecem mais ou menos no primeiro mês e que vão passando naturalmente com o tempo, sem a necessidade de tratamento.</p>
                <p>Esses sinais parecem incoerentes com a imagem da mulher que acabou de receber nos braços seu bebê? Pensar na tristeza enquanto um sentimento comum à recém-mãe, que está há poucos dias com seu recém-nascido, é estranho? Pois é, confiar na ausência de tristeza ou no abafamento de qualquer indício dela é um mal da atualidade não só para as mães, mas é sobre elas que recaem as mais pesadas idealizações de felicidade e plenitude.</p>
                <p>Criamos muitas expectativas irreais sobre toda a situação perinatal e acabamos por negar e nos distanciar dessa tristeza natural, esperando surgir uma mãe completamente e apenas feliz com a chegada de um sujeito que ela não conhece. No entanto, com tantas perdas que são vivenciadas, espera-se que se façam lutos na perinatalidade (o luto do bebê sonhado, das condições esperadas, dos sentimentos que “deveria” sentir, das expectativas sobre os cuidados com o bebê, etc.), e com isso, também se espera um humor mais deprimido de quem acabou de ter um bebê. </p>
                <p>Nesse momento, muita gente pode pensar estar diante de uma depressão e a medicação aparece como a heroína num contexto onde não há vilões. Na realidade, há uma má interpretação da tristeza, pois nesses casos, não existe quadro patológico. Como ansiar a plenitude eterna quando você está apenas começando a conhecer alguém que depende inteiramente dos seus cuidados?</p>
                <p>A depressão é um fenômeno que pode ocorrer em qualquer momento da vida dos seres humanos. Depressão adolescente, depressão pós-demissão, depressão pós-morte, depressão pós-cirúrgica. Termos que não existem, pois são todos eventos tidos como “depressão”, não há especificidade, ocorrendo em situações diversas da vida.  No pós-parto a compreensão é a mesma, encontramos dois fenômenos humanos (a depressão e o pós-parto) que se encontram num dado sujeito (23,6% das mulheres brasileiras1) e por isso seus sintomas são semelhantes a qualquer outra depressão: tristeza profunda, isolamento, choro fácil, inapetência, ansiedade, insônia, desânimo, desinteresse ou falta de prazer pelas atividades do cotidiano, falta de concentração, inquietação.</p>
                <p>A característica marcante nesses casos é que quando a depressão acomete uma mulher cuidando de um recém-nascido, esses sinais vão se relacionar ao bebê e às pessoas ao seu entorno, podendo comprometer os cuidados com o filho e as outras relações da mulher. O comportamento que mais chama a atenção é o desinteresse ou o sentimento de incapacidade em relação ao bebê, sendo esta a atividade na qual a mãe se debruça por mais tempo.</p>
                <p>Tanto o Baby Blues como a Depressão no pós-parto não tem uma causa única. Ambos são provenientes das inúmeras transformações físicas, afetivas, sociais e psicólogicas inerentes à perinatalidade e que, aliadas ao psiquismo único de cada sujeito (sua história, família, mecanismos de defesa, etc) e à cultura em que está inserido, poderão desencadear ou não esses quadros. Apesar de parecerem ter sintomas análogos, os fenômenos do Baby Blues e da Depressão no pós-parto se diferenciam pela persistência e intensidade dos mesmos – os sintomas depressivos existem no Baby blues, mas eles regridem sozinhos - e o quanto eles prejudicam a vida da mulher e sua relação com o bebê. Um olhar cuidadoso e não moralizante de um familiar ou amigo poderá identificar uma situação onde se faz necessário buscar por uma intervenção profissional. </p>',
        ]);

        $post->referencias()->create([
            'texto' => '1 Estudo Fiocruz:',
            'texto_link' => 'blog.saude.gov.br',
            'url' => 'http://blog.saude.gov.br',
        ]);

        $post = \App\Models\Post::create([
            'capa_url' => 'https://res.cloudinary.com/tesseract/image/upload/c_crop,g_north,h_750,w_1500,y_50/c_scale,w_949/v1549677256/jussara/FILME-BIRD-BOX-08.jpg.jpg',
            'slug' => 'Desvendando-Bird-Box-um-olhar-sobre-a-maternidade',
            'titulo' => 'Desvendando Bird Box: um olhar sobre a maternidade',
            'data_publicacao' => '2019-02-11',
            'conteudo' => '<p>A produção original Netflix “Bird Box” (2018) que traz Sandra Bullock como atriz principal e Susanne Bier na direção, suscitou discussões entre os telespectadores que tentaram revelar os mistérios das simbologias apresentadas no filme. Eu, assim como vários outros, ouvi muito sobre o filme antes de me interessar por ele, mas assumo que o comentário que me cativou foi “estão falando que é sobre maternidade” e foi com esse olhar que assisti e escrevo um pouco do que me provocou nessa temática1.  </p>
<p> A composição da relação de Malorie durante a gestação (insatisfeita e deprimida) e posteriormente, com seus dois filhos, nos dá exemplos e possibilidades de análise sobre a construção do ser mãe2, apontando que a máxima “quando nasce um bebê, nasce uma mãe” pode não ser tão máxima assim.  </p>
<p> As crianças não tinham nome (ela os chamava de Garota e Garoto), aquilo que nos identifica e nos diferencia, assim como ela própria também não conseguia – ao longo de quase toda trama – se nomear mãe. Não vemos cenas de brincadeiras durante o filme envolvendo Malorie e as crianças – atividade tão importante na constituição subjetiva na primeira infância. Pelo contrário, em dado momento, ela chega a interromper a história que Tom, seu companheiro, estaria contando a elas.  </p>
<p> Malorie diz a Tom que tudo o que ela fez foi pelas crianças – e não está errada. Tudo o que ela havia feito até aquele momento, teria sido para manter as crianças fisicamente vivas, para que elas sobrevivessem em meio ao caos. A sobrevivência foi imperativa e norteou seu cuidado com os filhos. E foi à sua maneira, nas condições desastrosas em que se encontravam, que ela pode criar e cuidar das crianças.  </p>

<p> Malorie engravidou e pariu um de seus filhos, mas isso já a torna automaticamente mãe? Gestar e parir, por si só, não faz de uma mulher mãe – temos os casos de adoção como exemplos dessa afirmação, quando pessoas que não passaram pela vivência perinatal (gestação, parto e puerpério) podem se tornar pais (e inclusive a própria personagem adota o bebê de sua colega!). E, além disso, o outro lado da adoção – da mulher que está doando o bebê – também nos provoca a pensar que viver essas experiências no corpo não faz nascer a mãe do bebê que a mulher pariu. Não necessariamente uma mulher que está gestando ou que pariu um bebê, se tornará a mãe do mesmo, pois não se resume ao evento biológico – o longa “Juno” (2007), ilustra bem essa realidade. O ser mãe será significado por cada um, o modo como se colocará diante dos eventos da maternidade irá partir da singularidade de cada sujeito, de acordo com suas possibilidades e criatividade. </p>
<p> Na cena em que Malorie se percebe incapaz de escolher entre um dos filhos, quando ela escolhe não escolher nenhum deles para ser entregue à própria sorte ao ter que “olhar” para a travessia que percorreriam pelo rio, ela nos escancara que “carregar os meus genes”, “ser sangue do meu sangue” e “fui eu que pari”, não são critérios para o amor. </p>
<p> Numa situação de muito medo, desespero e angústia, Malorie termina a história que anteriormente interrompeu e conta à filha sobre um futuro belo e prazeroso, dando à criança e a si mesma através da palavra, a energia potencialmente viva de que é possível esperar algo bom. Ela resgata sua capacidade de criar, imaginar e inventar – capacidade tão importante quando estamos lidando com crianças e bebês, enfrentando momentos e sensações que, por vezes, são difíceis de nomear.
<p> O filme não é sobre maternidade, mas traz elementos para pensarmos sobre a construção dessa função, que não surge do nada, mas ao longo do contato e das experiências e através da singularidade de cada sujeito. Ao final, Malorie pode dar nome aos seus filhos e deixa-los brincar. É aí que, depois da travessia do rio e com crianças de 5 anos, ela se nomeia mãe.  </p> ',
        ]);

        $post->referencias()->create([
            'texto' => '1 Para análise de Bird Box por outro viés, recomendo o vídeo de Christian Dunker em seu canal no YouTube:',
            'texto_link' => 'https://www.youtube.com/watch?v=bgH59B4M5xg ',
            'url' => 'blog.saude.gov.br',
        ]);
    }
}
