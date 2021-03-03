    <!-- container -->
    <div class="container">
      <!-- contact-us-banner -->
      <section
        class="contact-us-banner d-flex align-items-center justify-content-center"
      >
        <h1 class="f-poppins text-white">CONTACT US</h1>
      </section>
      <!-- end-banner -->

      <section class="contact-us-content">
        <div class="row mt-4">
          <div class="col-lg-6">
            <div class="col-lg-12">
              <div
                class="card text-center"
                style="
                  box-shadow: 5px 5px 25px rgba(186, 167, 167, 0.25);
                  border: none;
                "
              >
                <div class="card-body">
                  <h5 class="card-title f-poppins">Wants To Join Our Team ?</h5>
                  <hr style="width: 50%" class="m-auto mb-3" />
                  <p class="card-text f-poppins">
                    Message Us Via one of the social media that we have. <br />
                    Be part of our great team, to make the best garment <br />
                    ever in the world.
                  </p>
                  <h5 class="pt-5 f-poppins">Our Social Media</h5>
                  <div class="d-flex justify-content-around">
                    <a href=""
                      ><img src="<?=BASEURL?>/assets/images/icon/instagram.svg" alt="" width="200%"
                    /></a>
                    <a href=""
                      ><img src="<?=BASEURL?>/assets/images/icon/facebook.svg" alt="" width="200%"
                    /></a>
                    <a href=""
                      ><img src="<?=BASEURL?>/assets/images/icon/twitter.svg" alt="" width="200%"
                    /></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 mt-2">
              <div
                class="card text-center"
                style="
                  box-shadow: 5px 5px 25px rgba(186, 167, 167, 0.25);
                  border: none;
                "
              >
                <div class="card-body">
                  <h5 class="card-title f-poppins">Consider Visiting Us ?</h5>
                  <hr style="width: 50%" class="m-auto mb-3" />
                  <p class="card-text f-poppins">
                    If you think it’s hard to talk via social media <br />
                    consider visiting us at our shop <br />
                    or our garment.
                  </p>
                  <iframe title="Make A Wish"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0778655221698!2d115.1643409148691!3d-8.684145493760552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24722b6794d8b%3A0xff97162e01937ed5!2sMake%20A%20Wish!5e0!3m2!1sid!2sid!4v1614346771714!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 d-flex align-items-center ">
                <div
                  class="card text-center w-100"
                  style="
                    box-shadow: 5px 5px 25px rgba(186, 167, 167, 0.25);
                    border: none;
                  "
                >
                  <div class="card-body">
                    <h5 class="card-title f-poppins">Send Us a Message</h5>
                    <hr style="width: 50%" class="m-auto mb-3" />
                    <p class="card-text text-center f-poppins">
                        Have a Suggestion ? Complaint ? <br>
                        give your suggestions, messages, your impressions <br>
                        or even complaint to us. Every message from you <br>
                        means a lot to us. 
                    </p>
                    <div class="row pt-2 text-md-center text-start">
                        <div class="col-lg-4">
                            <p>Address</p>
                            <p>Denpasar - Bali</p>
                        </div>
                        <div class="col-lg-4">
                            <p>Email</p>
                            <p>makeAwish@gmail.com</p>
                        </div>
                        <div class="col-lg-4">
                            <p>Phone</p>
                            <p>+62 811220987</p>
                        </div>
                    </div>
                    <form class="text-start f-poppins" method="POST" action="<?=BASEURL?>/admin/tambah_message">
                        <div class="form-group mt-4">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control f-quicksand" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group mt-4">
                          <label for="exampleInputPassword1">Subject</label>
                          <input type="text" class="form-control f-quicksand" id="exampleInputPassword1" placeholder="Enter Subject that represent your message in general" name="subject" required>
                        </div>
                        <div class="form-group mt-4">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="email" class="form-control f-quicksand" id="exampleInputPassword1" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control f-quicksand" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                          </div>
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-detail-product btn-1-detail-product border-0 mt-3">
                              <svg>
                                <rect
                                  x="0"
                                  y="0"
                                  fill="none"
                                  width="100%"
                                  height="100%"
                                />
                              </svg>
                              Send Message
                            </button>
                          </div>
                      </form>
                  </div>
                </div>
          </div>
        </div>
      </section>

      
    </div>
    <!-- end-container -->