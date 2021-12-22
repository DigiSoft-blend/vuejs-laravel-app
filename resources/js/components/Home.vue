<template>

    <div >
  
   <div class="p-5 mb-4 bg-light rounded-3 image1" style="color:white">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">BCO AirDroper</h1>
        <p class="col-md-8 fs-4">Participate in crypto airdrops right now on BCO AirDroper and get 500 BCO token worth $400. our full crypto calender, including crypto currencies, token will be available to our clients.  </p>
         <btn-component></btn-component>
      </div>
    </div>
   
    <!-- <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free Airdrop</h4>
          </div>
          <div class="card-body image1">
            <h1 class="card-title pricing-card-title">$100<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
               <btn-component></btn-component>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body image2">
            <h1 class="card-title pricing-card-title">$200<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body image3">
            <h1 class="card-title pricing-card-title">$500<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li><router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/login">BCO</router-link></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div> -->

    <div class="row align-items-md-stretch">
      <div class="col-md-6 mb-4">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>BUY 1000 BCO WORTH $700</h2>
          <p>BCO AirDroper is a global cryptocurrency trading platform where you can safely trade with millions of BCO clients. you can buy Bitcoin BCO from trusted vendors anytime from anywhere in the worldc</p>
           <button class="button" style="vertical-align:middle"><span>BUY BCO </span></button>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="h-100 p-5 bg-light border rounded-3 image2">
          <h2>Sign Up With <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/login">BCO</router-link></h2>
          <p>Sale BcO coins or exchange BcO with other prominent coins. with BCO AirDroper, you can do just more with coins. get
            our gifted Free Airdroper BcO, sign in with Facebook from our Website to get Airdroper token id verification.
          </p>
          <button class="button" style="vertical-align:middle"><span>SIGN UP</span></button>
        </div>
      </div>
    </div>


</div>
         
</template>

<style scoped>

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 20rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

</style>>
    
</style>



