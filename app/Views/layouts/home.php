<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template sederhana dengan
        codeigniter</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/stylebuku.css') ?>">
</head>

<body>
    <div id="wrapper">
        <?= $this->include('components/header'); ?>
        <?= $this->renderSection('content'); ?>
        <?= $this->include('components/footer'); ?>