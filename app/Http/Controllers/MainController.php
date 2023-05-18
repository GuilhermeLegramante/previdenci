<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Aws\Textract\TextractClient;
use Exception;
use Grafika\Grafika;
use Str;

class MainController extends Controller
{
    public function dashboard()
    {
        return view('parent.dashboard');
    }

    public function tesseract()
    {
        echo (new TesseractOCR('C:\marcas\7f.png'))
            ->executable('C:\Program Files\Tesseract-OCR\tesseract.exe')
            // ->allowlist(range('A', 'Z'))
            ->run();
    }

    public function grafika()
    {
        $editor = Grafika::createEditor();

        $meanValue = $editor->compare(getcwd() . '/img/z.png', getcwd() . '/img/z_paint.png');

        dd($meanValue);
    }

    public function aws()
    {
        $textractClient = new TextractClient([
            'version' => 'latest',
            // 'region' => env('AWS_DEFAULT_REGION'), // pass your region
            'region' => 'us-west-2',
            'credentials' => [
                'key'    => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY')
            ]
        ]);

        try {
            $editor = Grafika::createEditor();

            $image1 = null;

            $editor->open($image1, getcwd() . '/img/p/p_draw.png'); // Open jpeg image for editing
            $editor->resizeFit($image1, 30, 30); // Fit an image to 50 x 50 box
            $editor->save($image1, getcwd() . '/img/p/p_draw_resized.png');

            // $filter = Grafika::createFilter('Invert');
            // $editor->apply($image1, $filter);
            // $editor->save($image1, getcwd() . '/img/p/p_no_bg_invert.png');

            // $filter = Grafika::createFilter('Grayscale'); // Create filter object depending on available editor
            // $editor->apply($image1, $filter);
            // $editor->save($image1, getcwd() . '/img/p/p_no_bg_gray.png');

            // $filter = Grafika::createFilter('Sobel'); // Create filter object depending on available editor
            // $editor->apply($image1, $filter);
            // $editor->save($image1, getcwd() . '/img/p/p_no_bg_sobe.png');

            // dd($image1);

            $result = $textractClient->detectDocumentText([
                'Document' => [
                    'Bytes' => file_get_contents(getcwd() . '/img/p/p_draw_resized.png'),
                ]
            ]);

            // dd($result);
            $sum = 0;
            foreach ($result->get('Blocks') as $block) {
                // if ($block['BlockType'] == 'PAGE') {
                //     foreach ($block['Geometry']['Polygon'] as $key => $value) {
                //         $xy = $value['X'] + $value['X'];
                //         $sum += $xy;
                //     }
                // }

                if ($block['BlockType'] != 'WORD') continue;

                echo $block['Text'] . " ";
            }

            // dd($sum);
        } catch (Exception $e) {
            // output error message if fails
            dd($e->getMessage());
        }
    }
}
