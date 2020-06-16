<div class="container">
  <div class="py-5 text-center">
    <h2>Страница оформления подписки</h2>
  </div>
  

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Подписка на журнал</h6>
            <small class="text-muted">Обычная подписка</small>
          </div>
          <span class="text-muted">$10</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Сумма заказа (USD)</span>
          <strong>$10</strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Данные заказа</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Имя</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Обязательное поле для заполнения.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Фамилия</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Обязательное поле для заполнения.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Имя с карты</label>
            <input type="text" class="form-control" id="cc-name" placeholder="Ivan Ivanov" required="">
            <small class="text-muted">Полное имя с карты</small>
            <div class="invalid-feedback">
              Данное поле является обязательным для заполнения
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Номер карты</label>
            <input type="text" class="form-control" id="cc-number" placeholder="4000 1234 5678 4010" required="">
            <div class="invalid-feedback">
              Данное поле является обязательным для заполнения
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Дата выпуска</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" value="<?php 
			if (isset($_POST['action'])){
				echo rand(1, 28) . "/" . rand(1, 12);
				}
			else {
				echo "not ok"; 
			}				
			?>" required="">
            <div class="invalid-feedback">
              Данное поле является обязательным для заполнения
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="XXX" required="">
            <div class="invalid-feedback">
              Данное поле является обязательным для заполнения
            </div>
          </div>
        </div>
        </form>
		
		
	<form action="" method="post">
        <hr class="mb-4">
		<button class="btn btn-primary btn-lg btn-block" type="submit" type="hidden" name="action">Заполнить случайными значениями</button>
     </form>
		<hr class="mb-4">
		<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
    </div>
  </div>
</div>