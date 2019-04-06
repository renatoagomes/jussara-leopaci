<?php

use Illuminate\Database\Seeder;

class HomepageTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('homepages')->delete();

        $homepage = \App\Models\Homepage::create([
            'frases_slider'=> json_encode([
                [
                    'frase' => '(...) mas afinal é preciso <br>começar a amar, para não adoecer',
                    'autor' => '(Freud, 1914)',
                    'duracao' => 2,
                ],
                [
                    'frase' => 'A história não é o passado. A história é o passado na medida em que é historiado no presente - historiado no presente porque foi vivido no passado.',
                    'autor' => '(Lacan, 1954)',
                    'duracao' => 2,
                ],
                [
                    'frase' => 'Não existe essa coisa chamada bebê',
                    'autor' => '(Winnicott, 1958)',
                    'duracao' => 2,
                ],
                [
                    'frase' =>  'Falar de amor, com efeito, não se fala de outra coisa no discurso analítico',
                    'autor' => '(Lacan, 1972)',
                    'duracao' => 2,
                ],
            ]),

            'titulo_apresentacao'=>'Apresentação',
            'subtitulo_apresentacao'=>'Um pouco sobre mim e meu histórico profissional',
            'texto_apresentacao'=>'Sou psicóloga e trabalho com atendimento individual de adolescentes, adultos, idosos, pais/mães, gestantes e puérperas, tendo a psicanálise como referencial teórico. Também ofereço atendimento clínico à díade pai/mãe-bebê e grupos relacionados à perinatalidade.',

            'curriculum_json'=> json_encode([
                'Pós-graduação em Psicanálise na Perinatalidade e Parentalidade pelo Instituto Brasileiro de Psicologia Perinatal – Gerar (2018-presente).',
                'Psicóloga clínica pela Clínica Social Hélio Pellegrino (2016-presente).',
                'Psicóloga clínica em clínica particular (2016-presente).',
                'Psicóloga na Associação de Pais e Amigos dos Excepcionais – APAE/Bauru (2016-2017).',
                'Pós-graduação (Residência Multiprofissional) em Atenção Cirúrgica pela Faculdade de Medicina de Marília – FAMEMA (2013-2015).',
                'Pós-graduação (Aprimoramento) em Saúde da Mulher e Psicologia Hospitalar pela Universidade Estadual de Campinas – UNICAMP (2012-2013).',
                'Graduação em Psicologia pela Universidade Estadual Paulista – UNESP/Bauru (2009-2011).',
                'Graduação em Psicologia pela Universidade do Sagrado Coração – USC (2006-2009 interrompida).',
            ]),

            'link_curriculum'=>'http://lattes.cnpq.br/8838224350810664',

            'titulo_atuacao'=>'Atuação',

            'titulo_aba_psic_atuacao'=>'Clínica Psicanalítica',
            'intro_aba_psic_atuacao'=>'Atendimentos individuais com duração média de 50 minutos e frequência mínima de uma vez por semana, tendo a psicanálise como referencial teórico.',
            'texto_aba_psic_atuacao'=> "A entrevista é o procedimento que dá início ao processo analítico, sendo um espaço que possibilita a manifestação e o esclarecimento da demanda de quem procurou pelo atendimento e suas motivações para buscar esse processo. A entrevista pode se estender por mais de um encontro e também nesse momento, é estabelecido um contrato verbal, combinando horário, frequência, honorários, férias.\n \n A dupla que se forma entre analista e analisando procura desvendar o universo psíquico daquele que buscou análise, compreendendo que cada ser é único e é este ser único que buscamos (re)conhecer. ",

            'titulo_aba_social_atuacao'=>'Clínica Social',
            'intro_aba_social_atuacao'=> 'Atendimento clínico individual com duração média de 50 minutos oferecido para pessoas que necessitam de condições especiais de pagamento.',
            'texto_aba_social_atuacao'=> "A Clínica Social de Psicanálise Helio Pellegrino é uma organização que reúne profissionais da psicanálise que atuam em diferentes cidades do estado de São Paulo. Não se configura como instituição de caridade ou clínica de baixo custo, mas um espaço com o propósito de estabelecer contatos e relações justas entre os profissionais e quem procura atendimento, além da divulgação da psicanálise e da clínica psicanalítica. Para ser atendido, é necessário preencher a ficha de cadastro disponível no site da Clínica.  \n\n",
            'link_aba_social_atuacao' => 'https://www.clinicasocial.org/',

            'titulo_aba_perinatal_atuacao'=>'Clínica Perinatal',
            'intro_aba_perinatal_atuacao'=>'Atendimento clínico individual e/ou grupal oferecido para gestantes, puérperas, casais e díades pais/mães-bebês através do referencial psicanalítico.',
            'texto_aba_perinatal_atuacao'=>" A perinatalidade é um conceito relacionado às questões da reprodução humana e que compreende os momentos que precedem e sucedem o surgimento de um filho (tentativas, concepção, gestação, parto, processo de adoção, fertilização, amamentação, lutos, etc). Desse modo, a Psicologia Perinatal é um campo de atuação e estudo das temáticas emocionais envolvidas nessa fase da vida para cada sujeito.\n",
            'link_aba_perinatal_atuacao' => '/perinatal',

            'titulo_aba_eventos_atuacao'=>'Eventos',
            'intro_aba_eventos_atuacao'=>'Participação em eventos e palestras sobre área clínica, psicanálise e perinatalidade.',
            'texto_aba_eventos_atuacao'=>"Palestras, grupos de apoio e orientação, rodas de conversa, são ferramentas que podem possibilitar um espaço de debate e reflexão, auxiliando um grupo de pessoas em eventos, empresas, hospitais, escolas e berçários. Ofereço esses serviços dentro das temáticas da perinatalidade, constituição do sujeito e da saúde da mulher, tendo a psicanálise como referencial teórico. Para saber mais, entre em contato pelo e-mail abaixo.\n",
        ]);

        $homepage->fotos()->create([
            'tipo' => \App\Models\Foto::TIPO_HOME_BG,
            'cloudinary_id' => 'home_header_bg_1',
        ]);
    }
}
