const links = {
	"index.php": "home-link",
	"about.php": "about-link",
	"login.php": "login-link",
	"secret.php": "secret-link",
};

const currentPage = window.location.pathname.split("/").pop();

const isBaseUrl = currentPage === "" || currentPage === "index.php";
const activeLinkId = isBaseUrl ? "home-link" : links[currentPage];

if (activeLinkId) {
	const activeLink = document.getElementById(activeLinkId);
	activeLink.classList.add("active");
	activeLink.setAttribute("aria-current", "page");
}
