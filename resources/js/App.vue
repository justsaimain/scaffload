<template>
    <div class="app">
        <header class="header" id="header">
            <nav class="nav container">
                <div class="nav__menu py-3" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="bx bx-home-alt nav__icon"></i>
                                <span class="nav__name">Home</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="bx bx-layer nav__icon"></i>
                                <span class="nav__name">Tournament</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="bx bx-line-chart nav__icon"></i>
                                <span class="nav__name">Leaderboard</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="bx bx-cog nav__icon"></i>
                                <span class="nav__name">Setting</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
export default {
    name: "app",
    components: {},
};
</script>
<style>
/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

/*=============== VARIABLES CSS ===============*/
:root {
    --header-height: 3rem;

    /*========== Colors ==========*/
    --hue: 174;
    --sat: 63%;
    --first-color: #4c2fe3;
    --first-color-alt: hsl(var(--hue), var(--sat), 36%);
    --title-color: hsl(var(--hue), 12%, 15%);
    --text-color: hsl(var(--hue), 8%, 35%);
    --body-color: hsl(var(--hue), 100%, 99%);
    --container-color: #fff;

    /*========== Font and typography ==========*/
    --body-font: "Open Sans", sans-serif;
    --h1-font-size: 1.5rem;
    --normal-font-size: 0.938rem;
    --tiny-font-size: 0.625rem;

    /*========== z index ==========*/
    --z-tooltip: 10;
    --z-fixed: 100;
}

@media screen and (min-width: 968px) {
    :root {
        --h1-font-size: 2.25rem;
        --normal-font-size: 1rem;
    }
}
</style>

<style scoped>
/*=============== BASE ===============*/
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: var(--header-height) 0 0 0;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    background-color: var(--body-color);
    color: var(--text-color);
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
}

img {
    max-width: 100%;
    height: auto;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.section {
    padding: 3.5rem 10px;
}

/*=============== LAYOUT ===============*/
.container {
    max-width: 968px;
    margin-left: auto;
    margin-right: auto;
}

/*=============== HEADER ===============*/
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--container-color) !important;
    z-index: var(--z-fixed);
    transition: 0.4s;
}

/*=============== NAV ===============*/

.nav {
    height: var(--header-height);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

@media screen and (max-width: 767px) {
    .header,
    .nav {
        background: transparent !important;
        height: 0px !important;
    }

    .section {
        padding: 1rem 1rem 3.5rem 1rem;
    }

    .nav__menu {
        position: fixed;
        bottom: 0;
        left: 0;
        background-color: var(--container-color);
        box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
        width: 100%;
        height: 4rem;
        padding: 0 1rem;
        display: grid;
        align-content: center;
        border-radius: 1.25rem 1.25rem 0 0;
        transition: 0.4s;
    }
}

.nav__list,
.nav__link {
    display: flex;
}

.nav__link {
    flex-direction: column;
    align-items: center;
    row-gap: 4px;
    color: var(--title-color);
    font-weight: 600;
}

.nav__list {
    justify-content: space-around;
}

.nav__name {
    font-size: var(--tiny-font-size);
    display: none;
}

.nav__icon {
    font-size: 1.5rem;
}

/*Active link*/
.active-link {
    position: relative;
    color: var(--first-color);
    transition: 0.3s;
}

/* Minimalist design, active link */
.active-link::before {
    content: "";
    position: absolute;
    bottom: -0.5rem;
    width: 4px;
    height: 4px;
    background-color: var(--first-color);
    border-radius: 50%;
}

/* Change background header */
.scroll-header {
    box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
}

/*=============== MEDIA QUERIES ===============*/
/* For small devices */
/* Remove if you choose, the minimalist design */
@media screen and (max-width: 320px) {
}

/* For medium devices */
@media screen and (min-width: 576px) {
    .nav__list {
        justify-content: center;
        column-gap: 3rem;
    }

    .header {
        padding: 0 3.5rem;
        background: var(--container-color);
    }

    .section {
        padding: 6rem 1rem 1rem 1rem !important;
    }
}

@media screen and (min-width: 767px) {
    body {
        margin: 0;
    }
    .section {
        padding: 3.5rem 0;
    }
    .nav {
        height: calc(var(--header-height) + 1.5rem); /* 4.5rem */
    }
    .nav__img {
        display: none;
    }
    .nav__icon {
        display: none;
    }
    .nav__name {
        font-size: var(--normal-font-size);
        display: block; /* Minimalist design, visible labels */
    }
    .nav__link:hover {
        color: var(--first-color);
    }

    /* Minimalist design */
    .active-link::before {
        bottom: -0.75rem;
    }
}

/* For large devices */
@media screen and (min-width: 1024px) {
    .container {
        margin-left: auto;
        margin-right: auto;
    }

    .section {
        padding: 6rem 1rem 1rem 1rem !important;
    }
}
</style>
