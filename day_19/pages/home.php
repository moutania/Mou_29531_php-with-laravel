<?php include "pages/includes/header.php"?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input world</label>
                                <div class="col-md-8 ">
                                    <input type="text" name="input_value" class="form-control" >
                                </div>
                            </div> <!--end-->

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <label for="" class=""><input type="radio" name="type" value="word"> word count</label>
                                    <label for="" class=""><input type="radio" name="type" value="character"> Character count</label>
                                </div>
                            </div> <!-- end count   -->
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <textarea  class="form-control" readonly cols="30" rows="10">
                                        <?php echo "$givenWord\nwordCount\n$characterCount";?>

<!--                                    --><?php //echo isset($result) ? $result['givenWord'] : '' ?><!-- <br />-->
<!--                                    --><?php //echo isset($result) ? $result['wordCount'] : '' ?><!-- <br />-->
<!--                                    --><?php //echo isset($result) ? $result['characterCount'] : '' ?><!-- <br />-->

                                    </textarea>
<!--                                    <input type="text" class="form-control" readonly value="--><?php //echo isset($result) ? $result :'';?><!--">-->
                                </div>
                            </div> <!--end-->
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Get Result</label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Get Result">
                                </div>
                            </div> <!--end-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



