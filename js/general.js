var API_path = "/api/";

function API_Post(node, data, callback) {
    $.ajax
    (
        {
            type: "POST",
            url: API_path+node,
            data: data

        }
    ).done( callback );
}