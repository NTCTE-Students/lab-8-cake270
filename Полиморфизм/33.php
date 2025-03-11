<?php

abstract class Document {
    abstract public function save($content);
}

class PDFDocument extends Document {
    public function save($content) {
        print("Сохранение документа в формате PDF с содержимым: {$content}<br>");
    }
}

class WordDocument extends Document {
    public function save($content) {
        print("Сохранение документа в формате Word с содержимым: {$content}<br>");
    }
}

class ExcelDocument extends Document {
    public function save($content) {
        print("Сохранение документа в формате Excel с содержимым: {$content}<br>");
    }
}

// Пример использования
$pdfDoc = new PDFDocument();
$wordDoc = new WordDocument();
$excelDoc = new ExcelDocument();

// Тестирование сохранения документов
$pdfDoc->save("Это содержимое PDF-документа.");
$wordDoc->save("Это содержимое Word-документа.");
$excelDoc->save("Это содержимое Excel-документа.");

?>