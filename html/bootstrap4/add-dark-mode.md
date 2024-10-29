### Setting up dark mode in Bootstrapv4

There is a couple things to set up are the css files, the js file and the html toggle switch, references to the files.
This version with keep the chosen option as a cookie a persist from page to page.

`cmd or whatever`

#### light-theme.css file
```
body {
    background-color: white;
    color: black;
}
```

#### dark-theme.css file
```
body {
    background-color: #121212;
    color: white;
}

.card {
    background-color: #333 !important; /* Dark background color for the card */
    color: #f8f9fa !important; /* Light text color */
    border-color: #444 !important; /* Dark border color */
}

/* Optional: adjust other components as needed */
.card-header,
.card-footer {
    background-color: #444 !important;
    color: #f8f9fa !important;
}
```

#### dark-them.js file
```
const themeSwitch = document.getElementById('themeSwitch');
const themeStylesheet = document.getElementById('themeStylesheet');

// Load the preferred theme on page load
document.addEventListener("DOMContentLoaded", () => {
    const theme = getCookie('theme');
    if (theme === 'dark') {
        themeStylesheet.setAttribute('href', '/css/dark-theme.css');
        if (themeSwitch) themeSwitch.checked = true;
    } else {
        themeStylesheet.setAttribute('href', '/css/light-theme.css');
    }
});

// Toggle theme and save the preference in cookies
if (themeSwitch) {
    themeSwitch.addEventListener('change', () => {
        if (themeSwitch.checked) {
            themeStylesheet.setAttribute('href', '/css/dark-theme.css');
            setCookie('theme', 'dark', 30);
        } else {
            themeStylesheet.setAttribute('href', '/css/light-theme.css');
            setCookie('theme', 'light', 30);
        }
    });
}

// Helper function to set a cookie
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Helper function to get a cookie by name
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
```

Add references in your layout file or main template file.
Note the use of the cache busting version notation for the reference files. ?v=1.0
`<link id="themeStylesheet" rel="stylesheet" href="~/css/light-theme.css?v=1.0">`
`<script src="~/js/dark-theme.js?v=1.0" asp-append-version="true"></script>`

Add the toggle switch in this case it is a simple checkbox in the footer of the layout or main template file.
```
<footer class="border-top footer text-muted">
    <div class="container">
        &copy; Year - Your System
        <label for="themeSwitch">Dark Mode</label>
        <input type="checkbox" id="themeSwitch">
    </div>
</footer>
```

- Source(s)
  - [1](link1)
  - [2](link2)
