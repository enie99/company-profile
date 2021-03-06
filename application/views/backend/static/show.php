 <section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Static Page</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Static Page</a></li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong> Daftar Static Page</strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>URL</th>
                                    <th>Status</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($static as $key => $st) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1; ?></th>
                                    <td><?php echo $st['article_title']; ?></td>
                                    <td><?php echo $st['category_name']; ?></td>
                                    <td><?php echo $st['category_url'] ?></td>
                                    <td>
                                        <?php 
                                        if ($st['article_status'] == 1){
                                            echo "Aktif";
                                        }
                                        else{
                                            echo "Tidak Aktif";
                                        } 
                                        ?>    
                                    </td>
                                    
                                    <td>
                                        <center>
                                                <a href="<?php echo base_url('logincms/static_page/detail/').$st['article_id']; ?>">
                                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-eye"></i></button>
                                                </a>
                                                <a href="<?php echo base_url('logincms/static_page/edit/').$st['article_id']; ?>">
                                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-pencil"></i></button>
                                                </a>
                                            
                                        </center>
                                    </td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows --> 
    </div>
</section>