<?php

namespace App;

class Prova
{

    public function QuestaoUm(int $n, array $arr)
    {

        sort($arr);    

        if ($n > 0){
            //.. associa
            $count = [];
            foreach( $arr as $key){
                if ( array_key_exists($key,$count)){
                    $count[$key] = $count[$key]+1;
                }else{
                    $count[$key] = 1;
                }
            }

            //... ordena
            $i = 1;
            $retorno = [];
            
            while ($i <= $n ){
               
                foreach ($count as $key => $value){
                    if ($value == $i){
                        for ($loop = 1; $loop <= $i; $loop++){
                            $retorno[] = $key;
                        }                    
                    }
                }

                $i++;
            }
            

            return $retorno;
        }

        return [];
    }

    public function QuestaoDois(int $n)
    {
        if ($n > 0){
            $fibonacci = [];
            for ($i = 0; $i < $n; $i++){
                if ($i < 2){
                    $fibonacci[] = $i;
                }else{
                    $fibonacci[] = $fibonacci[$i-2] + $fibonacci[$i-1];
                }
            }             

            return $fibonacci;

        }

        return $n;

    }

    public function QuestaoTres(string $s)
    {
        $seqMgic = ["a","e","i","o","u"];
        $text0 = $s;
       
        $count = 0;
        foreach ($seqMgic as $key => $value){

            $text = strstr($text0,$value);
            if ($text === false){
                return 0;
            }

            $busca = str_split($text);
            foreach ($busca as $key2 => $value2){

                if ( $value <> 'u'){
                    if ($value2 <> $seqMgic[$key+1]){             

                        if ($value == $value2 ){
                            $count++;
                        }


                    }else{
                        $text0 = strstr($text,$value);
                        break 1;
                    }
                }else{
                    if ($value == $value2 ){
                        $count++;
                    }
                }

            }
            
        }

        return $count;


    }

    public function QuestaoQuatro(int $n, array $a, array $b, array $v)
    {
        $arr = array_fill(1,$n,0);
        foreach ($a as $key => $value){
            
            foreach ($arr as $key2 => $value2){

                if ($key2 >= $value and $key2 <= $b[$key] ){
                    $arr[$key2] = ($value2 + $v[$key]);
                }
            }
        }

        return max($arr);

    }
}



