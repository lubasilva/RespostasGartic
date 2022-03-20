<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animais = ["rã","anu","asa","boi","ema","emu","gnu","uçá","adax","alce","asno","atum","açor","bico","bode","boto","cuco","dodô","égua","foca","galo","gato","íbis","jacu","kudu","leão","leoa","lobo","lula","mula","naja","onça","orca","órix","paca","pacu","pata","pato","pena","peru","piau","puma","rabo","rato","rena","sapo","siri","tatu","teiú","urso","vaca","zebu","ácaro","águia","arara","aratu","atobá","bagre","betta","bisão","cabra","calau","carpa","cação","cervo","cisne","coala","cobra","corvo","craca","crina","cupim","curió","cutia","dingo","furão","gambá","ganso","garra","garça","gibão","grilo","guará","hiena","iaque","irara","larva","lebre","lesma","lhama","lince","mamba","morsa","mosca","ocapi","ostra","panda","pavão","peixe","píton","polvo","pombo","pônei","porco","potro","pulga","quati","quivi","ratel","sagui","saiga","tigre","touro","traça","truta","urubu","urutu","vespa","xexéu","zebra","abelha","abutre","alpaca","ameiva","aranha","arraia","azulão","badejo","baiacu","baleia","barata","beluga","búfalo","cadela","camelo","castor","casuar","cavalo","chacal","chifre","chupim","civeta","coelho","coiote","condor","corais","coruja","crista","enguia","enxame","escama","faisão","falcão","feneco","ferrão","fuinha","gavial","gavião","gazela","gineta","girafa","girino","glutão","gorila","iguana","impala","jabuti","jacaré","javali","jaçanã","jerboa","jiboia","leitão","lontra","lêmure","mabeco","macaco","macuco","mamute","manada","moreia","narval","ouriço","ovelha","pardal","perdiz","piolho","pipira","raposa","robalo","salmão","serval","sucuri","tainha","texugo","traíra","tromba","tucano","tuiuiú","zangão","aie-aie","anêmona","arenque","arminho","auroque","axolote","babuíno","besouro","bezerro","cabrito","cacatua","caititu","calango","camarão","canguru","canário","caracal","caracol","cardeal","cardume","carriça","cegonha","cigarra","codorna","colibri","corcova","corvina","cotovia","doninha","dourado","esquilo","formiga","fragata","gaivota","galinha","garoupa","guanaco","guelras","hamster","jamanta","jumento","lacraia","lagarta","lagarto","lagosta","lambari","mandril","marmota","marreco","minhoca","molusco","morcego","narceja","náutilo","pantera","pinguim","pintado","piranha","pixarro","poraquê","quetzal","rebanho","seriema","tangará","tilápia","tubarão","vicunha","vombate","wallaby","abetarda","albatroz","alcateia","antílope","araponga","ariranha","avestruz","cachorro","camaleão","capivara","caramujo","carneiro","cascavel","chamariz","cordeiro","curimatã","elefante","flamingo","golfinho","guaxinim","guepardo","jararaca","joaninha","leopardo","libélula","linguado","lombriga","mangusto","mariposa","maritaca","mexilhão","mosquito","pangolim","papagaio","pelicano","pirarucu","queixada","ratazana","saicanga","sapo-boi","saracura","sardinha","serpente","suricato","surucucu","tamanduá","tambaqui","tanajura","taturana","toupeira","tucunaré","urumutum","zorrilho","água-viva","andorinha","ararajuba","barbatana","bem-te-vi","bicho-pau","borboleta","cachalote","calopsita","carrapato","centopeia","chimpanzé","chinchila","crocodilo","escorpião","gafanhoto","jacutinga","lagartixa","mata-mata","musaranho","nadadeira","peixe-boi","peixe-lua","peixe-rei","peixe-sol","percevejo","periquito","tamanduaí","tartaruga","tarântula","tico-tico","urubu-rei","vaga-lume","beija-flor","camundongo","caranguejo","cobra-cega","cobra-cipó","dromedário","estorninho","hipopótamo","jararacuçu","lobo-guará","marimbondo","papa-capim","peixe-anjo","peixe-galo","peixe-gato","peixe-leão","pernilongo","salamandra","tentáculos","urso-pardo","urso-polar","agulhão vela","baleia-azul","bicho-folha","bugio-preto","cobra-coral","dragão do mar","escaravelho","gralha-azul","jaguatirica","marlin-azul","orangotango","peixe-bolha","peixe-bruxa","peixe-corda","peixe-folha","peixe-pedra","peixe-serra","peixe-zebra","quero-quero","rinoceronte","sanguessuga","tigre branco","viúva-negra","aranha-pavão","coelho angorá","formiga-leão","gato-do-mato","leão-marinho","lobo-marinho","louva-a-deus","macaco-prego","ornitorrinco","pássaro-lira","peixe-agulha","peixe-espada","peixe-voador","porco-do-mar","tubarão-lixa","vespa-do-mar","aranha-camelo","aranha-do-mar","aranha-marrom","bicho-da-seda","foca-elefante","formiga-verde","gazela-girafa","joão-de-barro","macaco-aranha","ostra japonesa","ouriço-do-mar","peixe-morcego","peixe-palhaço","pepino-do-mar","porco-do-mato","porco-espinho","arara-vermelha","ave-do-paraíso","besouro-girafa","bicho-preguiça","cavalo-marinho","esponja-do-mar","esquilo-voador","estrela-do-mar","lobo da tasmânia","mosquito-prego","panda-vermelho","peixe-lanterna","peixe-mandarim","peixe-trombeta","porco-da-terra","tigre de bengala","tubarão-baleia","tubarão-branco","tubarão-duende","besouro-do-amor","diabo-espinhoso","macaco-narigudo","mico-leão-preto","papagaio-do-mar","peixe-borboleta","piolho-de-cobra","tubarão-martelo","cachorro-vinagre","dragão-de-komodo","diabo-da-tasmânia","escorpião-vinagre","mico-leão-dourado","porquinho-da-índia","leopardo-das-neves","tubarão-enfermeiro","besouro-rinoceronte","aranha-caranguejeira","rato-toupeira-pelado","caranguejo-violinista","cegonha-bico-de-sapato","caranguejo-dos-coqueiros"];

        foreach($animais as $animal) {
            $el[] = ['nome' => $animal];
        }

        Animal::insert($el);
    }
}