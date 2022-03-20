<?php

namespace Database\Seeders;

use App\Models\Profissao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profissoes = ["dj","ator","babá","gari","juiz","chefe","padre","vigia","atleta","barman","cantor","chofer","fiscal","freira","garçom","mágico","modelo","médico","perito","piloto","pintor","xerife","árbitro","armeiro","artesão","barista","biólogo","caçador","capataz","caseiro","copeiro","coveiro","diretor","doceiro","doleiro","domador","gandula","geólogo","ginasta","goleiro","locutor","maestro","moleiro","mordomo","motoboy","ourives","padeiro","palhaço","soldado","taxista","técnico","tenente","tenista","teólogo","tosador","turista","zelador","acrobata","advogado","aeromoça","agrônomo","ajudante","alfaiate","atirador","baixista","bancário","barbeiro","bombeiro","boxeador","carteiro","delegado","dentista","detetive","diarista","escritor","escrivão","escultor","feirante","ferreiro","florista","geógrafo","geriatra","lavrador","lenhador","manicure","mecânico","montador","pedagogo","pediatra","pedicure","pedreiro","peixeiro","pescador","pianista","policial","político","porteiro","prefeito","repórter","sargento","soldador","sushiman","tatuador","toureiro","vaqueiro","vendedor","vereador","alpinista","apicultor","aquarista","arquiteto","astrônomo","atendente","bailarina","baterista","biomédico","blogueiro","camareira","carvoeiro","cientista","cirurgião","dançarino","decorador","digitador","diplomata","doméstica","embalador","encanador","engraxate","estilista","executivo","faxineiro","figurante","flautista","fotógrafo","frentista","funileiro","garçonete","instrutor","maquiador","modelista","motorista","pizzaiolo","professor","psicólogo","saladeiro","sapateiro","segurança","tapeceiro","terapeuta","tipógrafo","topógrafo","velejador","velocista","açougueiro","adestrador","agricultor","almoxarife","arqueólogo","arquivista","astronauta","azulejista","balconista","bilheteiro","bioquímico","bordadeira","carcereiro","cartunista","comandante","comediante","coreógrafo","costureira","cozinheiro","depiladora","desenhista","economista","embaixador","empresário","enfermeira","engenheiro","entregador","esportista","estagiário","fazendeiro","garimpeiro","governador","governanta","grafiteiro","ilustrador","intérprete","jardineiro","jornaleiro","jornalista","lactarista","manobrista","maquinista","marceneiro","marinheiro","massagista","mensageiro","moldureiro","office-boy","paisagista","pasteleiro","perfumista","pipoqueiro","presidente","procurador","psiquiatra","relojoeiro","salgadeiro","sanfoneiro","secretária","socorrista","sorveteiro","tesoureiro","tintureiro","vidraceiro","arrumadeira","bandeirinha","borracheiro","caldeireiro","carpinteiro","comerciante","confeiteiro","datilógrafo","dedetizador","eletricista","esteticista","figurinista","floricultor","geneticista","guitarrista","malabarista","mergulhador","metalúrgico","ortopedista","palestrante","salva-vidas","seringueiro","telefonista","ventríloquo","veterinário","apresentador","ascensorista","cabeleireiro","caminhoneiro","cinegrafista","equilibrista","encadernador","farmacêutico","motociclista","paraquedista","publicitário","ambientalista","bibliotecário","cardiologista","entrevistador","guia de turismo","nutricionista","recepcionista","chefe de cozinha","contorcionista","dermatologista","fisioterapeuta","instrumentista","jogador de vôlei","massoterapeuta","meteorologista","neurocirurgião","oftalmologista","artista plástico","microbiologista","musicoterapeuta","engenheiro civil","guarda florestal","personal trainer","assistente social","cuidador de idosos","jogador de futebol","cirurgião plástico","comissária de bordo","entregador de pizza","engenheiro mecânico","engenheiro de alimentos","auxiliar administrativo"];

        foreach($profissoes as $profissao) {
            $el[] = ['nome' => $profissao];
        }

        Profissao::insert($el);
    }
}
