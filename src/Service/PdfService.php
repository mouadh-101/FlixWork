<?php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;

class PdfService
{
    private $domPdf;

    public function __construct($defaultFont = 'Garamond')
    {
        $this->domPdf = new Dompdf();

        $pdfOptions = new Options();

        $pdfOptions->set('defaultFont', $defaultFont);

        $this->domPdf->setOptions($pdfOptions);
    }

    public function generateResponsePDF($html, $filename = 'output.pdf')
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();

        // Stream the PDF to the browser
        $response = new Response($this->domPdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="' . $filename . '"');

        return $response;
    }
}
