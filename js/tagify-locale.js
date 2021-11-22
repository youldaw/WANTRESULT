var input = document.querySelector('input[name="input-custom-dropdown"]'),
// init Tagify script on the above inputs
tagify = new Tagify(input, {
    whitelist: ["qf.ru","#25180 coach coach coach", "ab.com", "bs.com", "dsa.com", "asd.ru", "to.ru", "fda.ru"],
    maxTags: 100,
    dropdown: {
    maxItems: 200,           // <- mixumum allowed rendered suggestions
    classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
    enabled: 0,             // <- show suggestions on focus
    closeOnSelect: true    // <- do not hide the suggestions dropdown once an item has been selected
    }
})

// The DOM element you wish to replace with Tagify
var input = document.querySelector('input[name=basic]');

// initialize Tagify on the above input node reference
new Tagify(input)