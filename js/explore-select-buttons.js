var last_active_id = 0; // Initialize as the starting project tab ID
document.getElementById(last_active_id).className = "select-option active";

var demo_container = document.getElementById("iframe-container");
var details_container = document.getElementById("project-details-container");

// Portfolio item elements
var demo_iframe = document.getElementById("project-iframe");
var project_title = document.getElementById("project-title");
var project_description = document.getElementById("project-description");
var repo_link = document.getElementById("repo-link");

var running = false;

function get_project_source(id) {
    switch (parseInt(id)) {
        case 1:
            return "https://fo-stats.willc-dev.net";
        case 2:
            return "https://semblueinc.com";
        case 3:
            return "https://servius.tech";
        case 4:
            return "https://viewmyplans.com";
        default:
            return "https://fo-stats.willc-dev.net";
    }
}

function select_project(element) {
    if (running || element.id == last_active_id)
        return;

    running = true;
    id = element.id;
    next_select = document.getElementById(id);
    next_select.className = "select-option active";

    old_select = document.getElementById(last_active_id);
    old_select.className = "select-option";

    last_active_id = id;

    demo_iframe.className = "project-iframe hidden";
    demo_container.className = "iframe-container hidden";
    details_container.className = "project-details hidden";



    setTimeout(() => {
        // Update project data
        item = portfolio_items[last_active_id];
        demo_iframe.src = item["src"];
        project_title.innerText = item["title"];
        project_description.innerText = item["description"];
        repo_link.href = item["repo_link"];


        demo_iframe.className = "project-iframe";

    }, 500);
    setTimeout(() => {
        demo_container.className = "iframe-container revealing";
        details_container.className = "project-details"
        setTimeout(
            () => {
                demo_container.className = "iframe-container";
                running = false;
            },500);
    }, 1000);
}