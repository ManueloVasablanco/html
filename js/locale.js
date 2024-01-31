function initTranslate(lang) {
   document.addEventListener("DOMContentLoaded", function() {

      if (lang === 'en') {
         const links = document.querySelectorAll("a:not(.language-switch)");
         for (let i = 0; i < links.length; i++) {
            let link = links[i];
            let href = link.getAttribute("href");
   
            if (href === '/') {
               link.setAttribute("href", "/en");
            } else if (href && !href.includes("http") && !href.includes("tel:") && !href.includes("mailto:")) {
               link.setAttribute("href", "/en" + href);
            }
         }
      }
      
      document.querySelectorAll('.language-switch').forEach(link => {
         let nowHref = window.location.pathname

         if (link.dataset.lang === 'ua') {
            if (nowHref === '/en') {
               link.setAttribute("href", '/');
            } else if (nowHref.startsWith('/en')) {
               link.setAttribute("href", nowHref.replace('/en', ''));
            }
         }


         if (link.dataset.lang === 'en') {
            if (nowHref === '/') {
               link.setAttribute("href", '/en');
            } else {
               link.setAttribute("href", "/en" + nowHref);
            }
         }
      })
   }); 
}