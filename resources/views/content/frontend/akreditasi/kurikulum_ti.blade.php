@extends('template.frontend')
@section('content')
    <!-- Page Banner Area Start -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .page__banner-content h1 {
                font-size: 50px;
                color: white;
            }
        </style>
        <title>Prodi Teknologi Informasi</title>
    </head>
    <div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>kurikulum</span>
                        <ul>
                            <li><a href="index.html">Kurikulum</a><span>|</span></li>
                            <li>Program Studi</li>
                        </ul>
                        <h1>Prodi Teknologi Informasi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Faq Area Start -->
    <div class="faq__area section-padding">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="faq-collapse">
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-graduation-cap"></span>Kurikullum 2015</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">

                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-graduation-cap"></span>Kurikullum 2019</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <h6>Semester 1</h6>
                                    <div class="table-responsive" style="margin-bottom: 30px;">
                                        <table style="width: 100%; border-collapse: collapse; text-align: center;">
                                            <thead>
                                                <tr style="background-color: #406AFF; color: white;">
                                                    <th style="border: 1px solid #ddd; padding: 12px;">No</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Kode Matakuliah</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Nama Mata Kuliah</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">SKS</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Silabus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">1</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3212</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Bahasa Inggris
                                                        Profesi</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3213</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Matematika Diskrit
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3337</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Konsep Jaringan</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3238</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Data Base Clien
                                                        server</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3249</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Interaksi Manusia dan
                                                        Komputer</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3321</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Rekayasa Perangkat
                                                        Lunak</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF; color: white;">
                                                        Jumlah</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF; color: white;">
                                                        21</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF;">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="courseModalLabel">Bahasa Inggris 1</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Nama Mata Kuliah</th>
                                                                        <td>: Bahasa Inggris 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Kode Mata Kuliah</th>
                                                                        <td>: TIK1205</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>SKS Mata Kuliah</th>
                                                                        <td>: 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Jam Teori</th>
                                                                        <td>: 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Jam Praktikum</th>
                                                                        <td>: 0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>TIU</th>
                                                                        <td>:</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            Setelah mengikuti mata kuliah ini, mahasiswa diharapkan dapat:
                                                                            <ul>
                                                                                <li>Mengidentifikasi bentuk tunggal dan jamak dari kata benda</li>
                                                                                <li>Mengidentifikasi struktur, tujuan dan karakteristik dari teks deskriptif</li>
                                                                                <li>Mengidentifikasi kata sifat, Mendeskripsikan benda (elemen dasar computer) dengan benar (menulis teks deskripsi)</li>
                                                                                <li>Mengidentifikasi struktur, tujuan, dan karakteristik teks prosedur</li>
                                                                                <li>Menjelaskan cara mengoperasikan benda (menulis teks prosedur)</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Bahasan</th>
                                                                        <td>:</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            Singular and plural form of noun (computer elements), Identifying the generic structure, objective, and language features of descriptive text, present tense, Adjective phrase, Writing a descriptive text, Identifying the generic structure, objective, and language features of procedure text, The use of connectives dan Writing procedure text.
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <h6>Semester 2</h6>
                                    <div class="table-responsive" style="margin-bottom: 30px;">
                                        <table style="width: 100%; border-collapse: collapse; text-align: center;">
                                            <thead>
                                                <tr style="background-color: #406AFF; color: white;">
                                                    <th style="border: 1px solid #ddd; padding: 12px;">No</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Kode Matakuliah</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Nama Mata Kuliah
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">SKS</th>
                                                    <th style="border: 1px solid #ddd; padding: 12px;">Silabus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">1</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3212</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Bahasa Inggris
                                                        Profesi</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3213</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Matematika Diskrit
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3337</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Konsep Jaringan</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3238</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Data Base Clien
                                                        server</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3249</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Interaksi Manusia
                                                        dan Komputer</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3321</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Rekayasa Perangkat
                                                        Lunak</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr style="background-color: #f2f2f2;">
                                                    <td style="border: 1px solid #ddd; padding: 12px;">7</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">TIK3220</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">Analisa Perancangan
                                                        Sistem Informasi</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 12px;"><button
                                                            style="background-color: #406AFF; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">i</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF; color: white;">
                                                        Jumlah</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF; color: white;">
                                                        21</td>
                                                    <td
                                                        style="border: 1px solid #ddd; padding: 12px; background-color: #406AFF;">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-graduation-cap"></span>Kurikullum 2022</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum,
                                        tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut
                                        hendrerit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->
@endsection
