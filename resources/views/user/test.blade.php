
 <div class="sec-title" style="text-align:center">
    <h5>Contact</h5>
    <h1>Get In Touch</h1>
</div>
 
 <section class="checkout-section">
    
    <div class="container">
        
            
        
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 left-column">
                <div class="inner-box">
                    <div class="billing-info">
                        
                        <form method="POST" action="{{route('test.store')}}" class="billing-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-6 customer-column">
                                    <div class="customer" style="background-color:#F3F0E9; text-align:center; color:#2B3C6B ; font-weight: bold;">Returning Customer? <a href="#">Click here to Login</a></div>
                                </div>
                                <br>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="nom">nom</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="nom"  name="nom" placeholder="Enter nom">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="prenom">prenom</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="prenom"  name="prenom" placeholder="Enter prenom">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="date_naiss">date naissance</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="date_naiss"  name="date_naiss" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="lieu_naiss">lieu naissance</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="lieu_naiss"  name="lieu_naiss" placeholder="lieu naissance">
                                    </div>
                                </div>

<br>
                                <div class="col-lg-12 col-md-12 col-sm-12 customer-column">
                                    <div class="customer" style="background-color:#F3F0E9; color:#2B3C6B ; text-align:center; font-weight: bold;">Returning Customer? <a href="#">Click here to Login</a></div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="nom_p">nom pere</label>
                                    <div class="field-input">
                                       <input type="text" class="form-control" id="nom_p"  name="nom_p" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="prenom_p">prenom pere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="prenom_p"  name="prenom_p" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="add_p">addresse pere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="add_p"  name="add_p" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="tel_p">tel pere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="tel_p"  name="tel_p" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="gsm_p  ">gsm pere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="gsm_p"  name="gsm_p" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="profession_p">profession pere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="profession_p"  name="profession_p" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label for="email_p">email pere</label>
                                    <div class="field-input">
                                        <input type="email" class="form-control" id="email_p"  name="email_p" >
                                    </div>
                                </div>
                               

                                <div class="col-lg-12 col-md-12 col-sm-6 customer-column">
                                    <div class="customer" style="background-color:#F3F0E9; text-align:center; color:#2B3C6B ; font-weight: bold;">Returning Customer? <a href="#">Click here to Login</a></div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="nom_m">nom mere</label>
                                    <div class="field-input">
                                       <input type="text" class="form-control" id="nom_m"  name="nom_m" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="prenom_m">prenom mere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="prenom_m"  name="prenom_m" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="add_m">addresse mere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="add_m"  name="add_m" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="tel_m">tel mere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="tel_m"  name="tel_m" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="gsm_m  ">gsm mere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="gsm_m"  name="gsm_m" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="profession_m">profession mere</label>
                                    <div class="field-input">
                                        <input type="text" class="form-control" id="profession_m"  name="profession_m" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label for="email_m">email mere</label>
                                    <div class="field-input">
                                        <input type="email" class="form-control" id="email_m"  name="email_m" >
                                    </div>
                                </div>
                               

                               
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                   <button type="submit">ok</button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
           
                
            </div>
        </div>
    </div>
</section>
