@extends('admin.master')
@section('main')

    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                                <h5>Ürün Listesi</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">İçe Aktar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dışa Aktar</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-solid" href="{{url('admin/newprodinsert')}}">Ürün Ekle</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Ürün Görseli</th>
                                            <th>Ürün Adı</th>
                                            <th>Kategori</th>
                                            <th>Mevcut Miktar</th>
                                            <th>Fiyat</th>
                                            <th>Durum</th>
                                            <th>Seçenek</th>
                                        </tr>

                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/1.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Aata Bisküvi</td>

                                                <td>Bisküvi</td>

                                                <td>12</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-danger">
                                                    <span>Onay Bekliyor</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/2.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Soğuk Demleme Kahve</td>

                                                <td>İçecekler</td>

                                                <td>10</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-close">
                                                    <span>Onaylı</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/3.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Fıstık Ezmesi Kurabiyesi</td>

                                                <td>Kurabiyeler</td>

                                                <td>9</td>

                                                <td class="td-price">₺86.35</td>

                                                <td class="status-close">
                                                    <span>Onaylı</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/4.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Yulaf Gevreği</td>

                                                <td>Gevrekler</td>

                                                <td>8</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-danger">
                                                    <span>Beklemede</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/5.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Patates Cipsi</td>

                                                <td>Cips</td>

                                                <td>23</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-close">
                                                    <span>Onaylandı</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/5.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Patates Cipsi</td>

                                                <td>Cips</td>

                                                <td>23</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-close">
                                                    <span>Onaylandı</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/7.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Badem Sütü</td>

                                                <td>Süt</td>

                                                <td>25</td>

                                                <td class="td-price">₺121.43</td>

                                                <td class="status-close">
                                                    <span>Onaylandı</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/11.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Buğday Ekmek</td>

                                                <td>Ekmekler</td>

                                                <td>6</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-danger">
                                                    <span>Onay Bekliyor</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/8.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Köpek Maması</td>

                                                <td>Evcil Hayvan Mamaları</td>

                                                <td>11</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-close">
                                                    <span>Onaylı</span>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/9.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Taze Et</td>

                                                <td>Et Ürünleri</td>

                                                <td>18</td>

                                                <td class="td-price">₺95.97</td>

                                                <td class="status-close">
                                                    <span>Onaylı</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{url('assets1/images/product/10.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>Klasik Kahve</td>

                                                <td>Kahve</td>

                                                <td>25</td>

                                                <td class="td-price">₺86.35</td>

                                                <td class="status-close">
                                                    <span>Onaylı</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('admin/')}}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Vemlo Yazılım Bilgi İletişim Teknolojileri Reklam Pazarlama Limited Şirketi</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


@endsection
