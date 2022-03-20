<?php

namespace Database\Seeders;

use App\Models\Adjetivo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdjetivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adjetivos = ["cru","alto","anão","caro","doce","feio","fino","fofa","fofo","leve","liso","novo","oval","raso","reto","rico","seco","sujo","ácido","alado","amigo","azedo","bravo","brega","calmo","chato","cheio","claro","curto","dócil","doido","fácil","farto","fatal","feliz","feroz","forte","fraco","frito","fundo","lento","limpo","linda","loira","longo","louco","macio","magro","meiga","míope","nobre","pobre","suado","torto","vazio","velho","veloz","vesgo","aberto","adulto","afiado","amador","amante","amargo","antigo","áspero","assado","babado","bêbado","bípede","bonita","cafona","calado","careca","cozido","destro","devoto","doente","domado","enxuto","escuro","famoso","febril","felino","frágil","fresco","frouxo","furado","gelado","grande","grosso","guloso","ligado","maduro","metido","moreno","murcho","oleoso","pálido","peludo","pesado","quente","quieto","rápido","solido","tímido","triste","último","abafado","abatido","acusado","afogado","agitado","amolado","amoroso","animado","atolado","barbudo","bondoso","canhoto","canibal","cansado","confuso","criança","cromado","curioso","deitado","devagar","educado","enjoado","faminto","flácido","florido","folgado","furioso","gigante","gostoso","incolor","irônico","magoado","marinho","medroso","molhado","nervoso","pequeno","pontudo","rasgado","redondo","risonho","sagrado","sentado","sortudo","sozinho","teimoso","tingido","abismado","acanhado","achatado","admirado","adorador","afastado","afundado","agachado","agarrado","alinhado","amarrado","amassado","apertado","aquático","atrasado","avarento","cabeludo","cacheado","castanho","cheiroso","ciumento","colorido","contente","corajoso","corcunda","corrupto","depenado","descalço","doloroso","elegante","enrolado","entalado","esmagado","espetado","estúpido","excluído","fervente","franzino","grisalho","grudento","horrível","invejoso","irritado","listrado","manchado","orelhudo","patriota","penteado","proibido","quebrado","queimado","saboroso","saudável","trancado","venenoso","abençoado","abobadado","acebolado","adiantado","agressivo","ajoelhado","alambrado","angelical","apetitoso","apressado","arrepiado","arruinado","asfaltado","assustado","bagunçado","bloqueado","boiadeiro","brilhante","bronzeado","calorento","camuflado","carinhoso","carnívoro","conectado","congelado","daltônico","desbotado","desligado","distraído","divertido","empolgado","encardido","encorpado","encostado","enfeitado","engessado","engraçado","enjaulado","ensaboado","entediado","espantado","espelhado","esponjoso","estudioso","exagerado","faraônico","fedorento","gorduroso","grampeado","iluminado","inclinado","jurássico","magnético","mascarado","mentiroso","musculoso","orgulhoso","pensativo","perfumado","protegido","religioso","romântico","solitário","sonâmbulo","triturado","abandonado","aborrecido","acidentado","acinturado","agasalhado","amarrotado","apaixonado","apimentado","aposentado","assombrado","barulhento","brincalhão","cadeirante","confidente","conformado","contagioso","desanimado","desastrado","dorminhoco","embaraçado","embrulhado","empacotado","empoeirado","fofoqueiro","inflamável","mumificado","preguiçoso","quadrupede","reciclável","sorridente","acinzentado","desarrumado","descabelado","esbugalhado","escandaloso","esquelético","falsificado","hipnotizado","inteligente","trabalhador","vegetariano","envergonhado","extrovertido","transparente","uniformizado","recém-nascido","aniversariante","claustrofóbico"];

            foreach($adjetivos as $adjetivo) {
                $adjs[] = ['nome' => $adjetivo];
            }

            Adjetivo::insert($adjs);
    }
}
