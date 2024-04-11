<?php
// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF; // Import PDF facade
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function generatePDFAndSendEmail(Request $request)
    {




        $emailData = [
            'email' => 'tahsin.blendin@gmail.com',
            'password' => '123',
            'eng_name' => 'hasibur rahman',
            'ban_name' => 'হাসিবুর রহমান',
            'father_name' => 'Hasmat Ali',
            'mother_name' => 'Zainab Begum',
            'permanent_address' => 'California',
            'mobile' => '01700000000',
            'blood_group' => 'AB+',
            'department_id' => 9,
            'date_of_birth' => '1998-12-21',
            'passing_year_id' => 4,
            'image' => 'https://www.redwolf.in/image/cache/catalog/stickers/tom-face-sticker-india-600x800.jpg',
            'signature' => 'https://signature.freefire-name.com/img.php?f=3&t=Tom',
            'lm_no' => '2000',
            'current_date' => '2022-11-30',
        ];


        // $mpdf = new \Mpdf\Mpdf([
        //     'default_font_size' => 16,
        //     'default_font' => 'nikosh',
        // ]);

        // // Generate PDF content
        // $pdfContent = view('pdf.bengali_pdf', $emailData)->render();
        // $mpdf->WriteHTML($pdfContent);
        // $mpdf->Output();




        // mail sending
        // $mpdf = new \Mpdf\Mpdf([
        //     'default_font_size' => 16,
        //     'default_font' => 'nikosh', // Change this to your desired Bengali font
        // ]);


        // // Generate PDF content
        // $pdfContent = view('pdf.bengali_pdf', $emailData)->render();

        // // Write HTML content to PDF
        // $mpdf->WriteHTML($pdfContent);

        // // Get PDF content as string
        // $pdfData = $mpdf->Output('', 'S');

        // // Send email with PDF attachment
        // Mail::send('pdf.bangla_email', $emailData, function ($message) use ($pdfData, $emailData) {
        //     $message->to(['branchaileen0@gmail.com', $emailData['email']], 'Recipient Name')
        //         ->subject('Subject of the Email')
        //         ->attachData($pdfData, 'document.pdf');
        // });

        // // Return a response indicating that the email has been sent
        // return "Email sent with PDF attachment.";













        $pdfContent = $this->generatePDF($emailData);

        // Send email with PDF attachment
        $this->sendEmailWithAttachment($emailData, $pdfContent, 'tahsin.blendin@gmail.com');

        // Return a response indicating success
        return "Email sent with PDF attachment.";
    }


    private function generatePDF($data)
    {
        // Create new mPDF instance
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 16,
            'default_font' => 'nikosh', // Change this to your desired Bengali font
        ]);

        // Generate PDF content with data
        $pdfContent = view('pdf.bengali_pdf', $data)->render();

        // Write HTML content to PDF
        $mpdf->WriteHTML($pdfContent);

        // Get PDF content as string
        return $mpdf->Output('', 'S');
    }
    private function sendEmailWithAttachment($emailData, $pdfData, $recipientEmail)
    {
        // Send email with PDF attachment
        Mail::send('pdf.bangla_email', $emailData, function ($message) use ($emailData, $pdfData, $recipientEmail) {
            $message->to(['branchaileen0@gmail.com', $recipientEmail], 'Recipient Name')
                ->subject('New User Registration')
                ->attachData($pdfData, 'LM-'.$emailData['lm_no'].'.pdf');
        });
    }
}
