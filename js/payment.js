const paymentFormHandler = (paymentWay, lang = "ua") => {

   const form = document.querySelector('.payments__form')

	const orderNum = document.querySelector('#payment-form-email')

	const orderCurrency = document.querySelector('#payment-form-currency')
	const orderAmount = document.querySelector('#payment-form-amount')

	const error = document.querySelector('.error')

	form.addEventListener('submit', async e => {
			e.preventDefault()

			let codeResponse = await fetch('/code/code.php')
			codeResponse = await codeResponse.json()
			if (codeResponse.indexOf(orderNum.value) === -1) {
				error.classList.add('show')
				return
			}

         let paymentLink = ''

         // if (paymentWay === 'concord') {
         //    let link = await fetch('/action/concord.php', {
         //       method: 'POST',
         //       headers: {
         //         'Content-Type': 'application/json',
         //       },
         //       body: JSON.stringify({
         //          amount: +(orderAmount.value.replaceAll(',', '.')),
         //          currency: orderCurrency.value,
         //          lang,
         //       }),
         //    })

         //    paymentLink = await link.json()
         // }

         if (paymentWay === 'monobank') {
            let link = await fetch('/action/monobank.php', {
               method: 'POST',
               headers: {
                 'Content-Type': 'application/json',
               },
               body: JSON.stringify({
                  amount: +(orderAmount.value.replaceAll(',', '.')) * 100,
                  currency: orderCurrency.value,
                  lang,
               }),
            })

            paymentLink = await link.json()
         }

         if (paymentWay === 'abank') {
            let link = await fetch('/action/a-bank.php', {
               method: 'POST',
               headers: {
                 'Content-Type': 'application/json',
               },
               body: JSON.stringify({
                  amount: +(orderAmount.value.replaceAll(',', '.')),
                  // currency: orderCurrency.value,
                  lang,
               }),
            })

            paymentLink = await link.json()
         }

         if (paymentWay === 'ipay') {
            let link = await fetch('/action/ipay.php', {
               method: 'POST',
               headers: {
                 'Content-Type': 'application/json',
               },
               body: JSON.stringify({
                  amount: +(orderAmount.value.replaceAll(',', '.')) * 100,
                  currency: orderCurrency.value,
                  lang,
               }),
            })

            paymentLink = await link.json()
         }

         // if (paymentWay === 'upc') {
         //    form.action = '/action/upc.php'
         //    form.querySelector('#langInput').value = lang
         //    form.submit()
         //    return;
         // }

         // if (paymentWay === 'portmone') {
         //    orderAmount.value = +(orderAmount.value.replaceAll(',', '.')),
         //    form.action = '/action/portmone.php'
         //    form.querySelector('#langInput').value = lang
         //    form.submit()
         //    return
         // }

         // if (paymentWay === 'platon') {
         //    orderAmount.value = (Math.round(+(orderAmount.value.replaceAll(',', '.')) * 100) / 100).toFixed(2);
         //    form.action = '/action/platon.php'
         //    form.querySelector('#langInput').value = lang
         //    form.submit()
         //    return
         // }

         // if (paymentWay === 'test') {
         //    return
         // }

			window.location.href = paymentLink
	})
}
