<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function index()
    {
        $gerais = ["dj", "cd", "fã", "pá", "pé", "rã","anu",  "asa",  "aro",  "avó",  "bar",  "baú", "boá", "boi", "céu", "chá", "cru", "dia", "dvd", "ema", "emu", "fax", "fio", "giz", "gnu", "gps", "ímã", "ler", "lua", "mãe", "mão", "mar", "mel", "oca", "ovo", "pai", "pão", "pia", "rei", "rim", "rio", "rua", "rum", "sal", "sol", "uçá", "uva", "véu", "abiu",  "açaí",  "acne",  "açor",  "adax", "afta",  "água",  "aipo",  "alça",  "alce", "alho",  "alto",  "amar",  "anão",  "anel", "angu",  "anjo",  "arar",  "arca",  "arco", "asma",  "asno",  "ator",  "atum",  "babá", "bala",  "balé",  "bata",  "bebê",  "beca", "bico",  "bidê",  "bife",  "boca",  "bode", "boia",  "bola",  "bolo",  "boné",  "bota", "bote",  "boto",  "boxe",  "broa",  "bule", "cabo",  "café",  "cair",  "cajá",  "caju", "cama",  "cano",  "capa",  "caro",  "casa", "chão",  "chip",  "cipó",  "clip",  "coco", "cola",  "cone",  "copo",  "coxa",  "cruz", "cubo",  "cuco",  "cuia",  "dado",  "dedo", "divã",  "doce",  "dodô",  "doer",  "égua", "elfo",  "elmo",  "faca",  "fada",  "feio", "figa",  "figo",  "fila",  "filé",  "fino", "fita",  "flan",  "flor",  "foca",  "fofa", "fofo",  "fogo",  "frio",  "fubá",  "galo", "gari",  "gato",  "gelo",  "gema",  "gibi", "gola",  "gota",  "iate",  "íbis",  "iglu", "ilha",  "ingá",  "ioga",  "ioiô",  "irmã", "isca",  "jaca",  "jacu",  "jato",  "jiló", "judô",  "juiz",  "kiwi",  "kudu",  "laço", "lago",  "lama",  "lata",  "lava",  "leão", "leme",  "leoa",  "leve",  "lima",  "lira", "liso",  "lobo",  "loja",  "lona",  "lula", "lupa",  "luva",  "maca",  "maçã",  "mago", "maiô",  "mala",  "mapa",  "mata",  "mate", "meia",  "mesa",  "mina",  "moer",  "mola", "moto",  "mula",  "muro",  "nabo",  "naja", "neta",  "neto",  "neve",  "novo",  "nuca", "oboé",  "odre",  "ogro",  "óleo",  "olho", "onça",  "onda",  "orar",  "orca",  "órix", "osso",  "ouro",  "oval",  "paca",  "pacu", "país",  "pano",  "pata",  "patê",  "pato", "pavê",  "pelo",  "pena",  "pera",  "peru", "pião",  "piau",  "pino",  "pipa",  "pneu", "poça",  "poço",  "pote",  "puff",  "puma", "purê",  "rabo",  "rack",  "raia",  "raio", "raiz",  "ralo",  "raso",  "rato",  "rede", "remo",  "rena",  "reto",  "rico",  "robô", "rodo",  "roer",  "romã",  "rosa",  "ruga", "sagu",  "saia",  "sair",  "sala",  "sapo", "seco",  "selo",  "sino",  "siri",  "sofá", "soja",  "sopa",  "soro",  "suco",  "sujo", "sumô",  "suor",  "surf",  "taça",  "taco", "taco",  "tatu",  "taxi",  "tear",  "teia", "teiú",  "tela",  "teto",  "tofu",  "toga", "trem",  "tuba",  "umbu",  "unha",  "urna", "urso",  "vaca",  "vaso",  "vela",  "vila", "voar",  "xale",  "zebu",];

        return view('geral.index', compact('gerais'));

    }
}
