<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body block-header">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <h2>Data Gallery</h2>
                            <ul class="breadcrumb p-l-0 p-b-0 ">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active"> Gallery</li>
                            </ul>
                        </div>            
                        <div class="col-lg-3 col-md-8 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row clearfix">            
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong> Data Gallery </strong></h2>
                    <ul class="header-dropdown">
                        <li>
                            <a href="<?php echo base_url('logincms/gallery/add') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah Gallery</button></a>
                        </li>
                        <li>
                            &nbsp;
                        </li>
                    </ul>
                </div>

                <div class="body">
                    <hr>    

                    <br>    



                    <style type="text/css">
                    ul .page-item{
                        padding-right: 30px;
                    }

                    li .active {
                        padding-right: 30px;
                    }

                    .frame-gallery{
                        height: 250px;
                        width: 100%;
                    }  


                    .frame-gallery{
                        overflow: hidden;
                    }


                </style>

                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <?php foreach ($gallery as $g): 

                        $id=$g->article_id;

                        ?>


                        <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                            <a href="<?php echo  base_url('gambar/gallery/').$g->photo_img ?>">
                                <div class="frame-gallery">

                                  <img class="img-fluid img-thumbnail" src="<?php echo base_url('gambar/gallery/').$g->photo_img ?>" alt="" >

                              </div>
                          </a>
                          <!-- <br> -->
                            <label float="left"><?php echo $g->photo_img; ?></label>
                          <form method="get" align="right">  
                            <input type="hidden" id="id_artikel<?php echo $g->article_id?>" value="<?php echo $g->article_id?>">
                            <button type="submit" onclick="hapus<?php echo $g->article_id ?>()" class="btn btn-raised btn-primary btn-round waves-effect" >Delete</button>
                        </form>
                    </div>

                    <script type="text/javascript">


                        function hapus<?php echo $g->article_id ?>() {

                           var id = $("#id_artikel<?php echo $g->article_id?>").val();
                           // alert(id);
                     if(confirm('Anda yakin akan menghapus gambar "<?php echo $g->photo_img ?>" ?')){
                        $.ajax({
                            url:"<?php echo base_url()?>logincms/gallery/hapus",
                            data:"id="+id,
                            success:function() {

                             // window.location.reload();   
                         }
                     });
                        // return true;
                    // }else{
                        // return false;    
                    }
                }




            </script>

        <?php endforeach ?>



    </div>
</div>
</div>
</div>




</div>




<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">

            <div class="body">
                <div>
                    <div  class="dataTables_wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <?php 

                                if (empty($this->uri->segment('4'))) {
                                    echo '1';
                                }
                                else {
                                    echo $this->uri->segment('4');
                                }
                                ?> to  of <?php echo $total_rows ?> entries</div>
                            </div>

                            <div class="col-sm-12 col-md-7">
                                <div >


                                    <?php echo $mpaging; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

