$("#login").on("submit", function(e) {

    var postVars = $("input, textarea, select").serialize();

    API_Post("login", postVars, loginSuccess);

    e.preventDefault();
});

function loginSuccess(data) {
    alert (data);
}