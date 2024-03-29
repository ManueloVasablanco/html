<?php require 'header.php'; ?>
<body data-lang="uk">
   <style>
      .payments__title {
         text-align: center;
      }

      .payments__form {
         display: flex;
         flex-direction: column;
         gap: 30px;
         max-width: 500px;
         margin: 0 auto;
      }

      .form-checkbox {
         display: flex;
         gap: 10px;
         justify-content: center;
      }

      .form-checkbox label {
         cursor: pointer;
         font-size: 16px;
      }

      .form-checkbox input[type="checkbox"] {
         -webkit-appearance: auto;
         -moz-appearance: auto;
         appearance: auto;
      }

      #payment-form-currency {
         width: 100%;
         height: 100%;
      }

      #payment-form-currency {
         cursor: pointer;
         margin: 0px -15px;
         padding: 0 15px;
         width: calc(100% + 30px);
      }

      #payment-form-currency:required:invalid {
         color: #808080;
      }

      .error {
         padding: 5px 10px 25px;
         opacity: 0;
         transition: .2s;
         pointer-events: none;
         visibility: hidden;
      }

      .error.show {
         opacity: 1;
         pointer-events: all;
         visibility: visible;
      }

      .error p {
         text-align: center;
         color: rgb(255, 78, 78);
         font-weight: 700;
      }
   </style>
<main>
<div class="back-wrapper empty"></div>
<div class="contacts-wrapper animate-wrapper">
   <div class="container w1240">
      <div class="payments">
         <h1 class="h1-v2 payments__title">Оплата услуг</h1>
         <div class="error">
            <p>Указанный email не зарегистрирован или заказ не активирован.</p>
         </div>
         <form class="payments__form" method="POST">
            <div class="form-row val">
               <input oninput="checkValue(this)" name="email" id="payment-form-email" type="text" required>
               <label for="payment-form-email">Эл. почта рекламного кабинета</label>
            </div>
            <div class="form-row val">
               <input oninput="checkValue(this)" name="name" id="payment-form-name" type="text">
               <label for="payment-form-name">Имя</label>
            </div>
            <div class="form-row val">
               <input oninput="checkValue(this)" name="amount" id="payment-form-amount" type="text" required>
                     <label for="payment-form-amount">Сумма к оплате</label>
                  </div>
                  <div class="form-row val">
                     <select id="payment-form-currency" name="currency" required>
                        <option value="" disabled hidden>Валюта</option>
                        <option selected value="EUR">EUR</option>
                        <!-- <option value="USD">USD</option>
                        <option value="KZT">KZT</option> -->
                     </select>
                  </div>
                  <div class="form-checkbox">
                     <input type="checkbox" name="accept" id="accept" required>
                     <label for="accept">Принимаю условия договора оферты и политики конфиденциальности</label>
                  </div>
                  <button class="btn red">Оплатить</button>
                  <img src="img/paylogo.png" alt="payment logo" class="logo-payment">
               </form>
            </div>
         </div>
      </div>
      <div class="breadcrumps-wrapper">
         <div class="container w1240">
            <ul class="breadcrumps">
               <li class="fz14"><a class="fz14" href="index.php">Брума & К</a></li>
               <li class="fz14"><span>Оплата услуг</span></li>
            </ul>
         </div>
      </div>
</main>

<?php require 'footer.php'; ?>