const tabsBtn = document.querySelectorAll (".tab");
const tabsItems = document.querySelectorAll(".sigIn"); 

tabsBtn.forEach(function(item) {
    item. addEventListener("click", function(){
        let currentBt = item;
        let tabId = currentBt.getAttribute("data-tab");
        let currentTab = document.querySelector (tabId);

        tabsBtn.forEach(function(item) {
            item.classList.remove('active');
        });

        tabsItems.forEach(function(item) {
            item.classList.remove('active');
        });

        currentBt.classList.add('active');
        currentTab.classList.add('active');
    });
});