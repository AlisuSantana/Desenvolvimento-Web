<?php
    namespace App\Classes;

    class ConverterImagem 
    {
        public static function generateJpeg ($imagem_entrada) {

            $imagem_saida= $imagem_entrada;

            $img = imagecreatefromgif($imagem_entrada);
            $w = imagesx($img);
            $h = imagesy($img);
            $trans = imagecolortransparent($img);

            if($trans >= 0) {
                $rgb = imagecolorsforindex($img, $trans);
                $oldimg = $img;
                $img = imagecreatetruecolor($w,$h);
                $color = imagecolorallocate($img,$rgb['red'],$rgb['green'],$rgb['blue']);
                imagefilledrectangle($img,0,0,$w,$h,$color);
                imagecopy($img,$oldimg,0,0,0,0,$w,$h);
            }

            imagejpeg($img,$imagem_saida);

            $img = imagecreatefrompng($imagem_entrada);// PNG para JPEG
            
        }
    }
    
?>

