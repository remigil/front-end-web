<style>
    .card-headline {
        background: linear-gradient(90deg, #9C9FB0 0.72%, #DBDDEA 100%) !important;
        border-radius: 10px 10px 0px 0px !important;
        color: white;
    }

    .card {
        border-radius: 10px 10px 0px 0px !important;
    }

    .item-card {
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: flex-start !important;
        padding: 20px 10px 20px 5px !important;
        gap: 20px !important;

    }

    .blue-card {
        background: linear-gradient(90deg, #11347A 0%, #003A91 89.58%) !important;
        border-radius: 5px !important;
    }

    .red-card {
        background: linear-gradient(90deg, #CB2D3E 0%, #ED171D 100%) !important;
        border-radius: 5px !important;
    }

    .green-card {
        background: linear-gradient(90deg, #3CA55C 0%, #B5AC49 100%) !important;
        border-radius: 5px !important;

    }

    .yellow-card {
        background: linear-gradient(90deg, #F09819 0%, #E8D42F 100%) !important;
        border-radius: 5px !important;
    }

    .top-five-headline {
        background: #CED6FF !important;
        border-radius: 5px !important;
        padding: 10px !important;
    }

    .table-head {
        background: #003A91 !important;
        border-radius: 5px 5px 0px 0px !important;
        text-align: center !important;
    }
</style>

<section class="shadow-sm">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="#"><?= $data['menu'] ?></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $data['submenu'] ?></li>
        </ol>
    </nav>
</section>

<section class="shadow-sm">
    <div class="card rounded">
        <div class="card-header card-headline">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2>
                </div>
                <div class="col-md-6">
                    <p class="text-end mx-4 text-dark fs-6 fw-light"><?= ucwords('last update 13 Agustus 2022') ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="item-card blue-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Pengaturan</h4>
                    </div>
                    <div class="item-card red-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Penjagaan</h4>
                    </div>
                    <div class="item-card green-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Pengawalan</h4>
                    </div>
                    <div class="item-card yellow-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Patroli</h4>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">5 RANGKING TURJAGWALI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr class="table-head text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">Pengaturan</th>
                                    <th scope="col">Penjagaan</th>
                                    <th scope="col">Pengawalan</th>
                                    <th scope="col">Patroli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="col-6">
        <h4>Wilayah</h4>
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Polda</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Polda</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <hr>
</section>

<section>
    <div class="col-12">
        <h4>Waktu</h4>
        <form action="">
            <div class="row">
                <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Customize</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" placeholder="Tanggal mulai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary table-head form-control">Tampilkan</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</section>