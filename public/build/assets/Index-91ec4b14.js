import{_ as a}from"./_plugin-vue_export-helper-c27b6911.js";import{e as s,o,F as l,s as i,a as e,g as t}from"./app-5f32efd2.js";const r = {
        props: {},
        data() {
            return {};
        },
        beforeMount() {},
        methods: {},
    },
    c = i(
        '<header id="header" class="header d-flex align-items-center"><div class="container-fluid container-xl d-flex align-items-center justify-content-between"><a href="index.html" class="logo d-flex align-items-center"><h1>Bolita<span>.</span></h1></a><i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i><i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i><nav id="navbar" class="navbar"><ul><li><a href="#" class="active">Inicio</a></li><li><a href="#felicitaciones">Feliz Aniversario</a></li><li><a href="#love">Love</a></li><li><a href="contact.html">Contact</a></li></ul></nav></div></header>',
        1
    ),
    n = e(
        "section",
        { id: "hero", class: "hero" },
        [
            e("div", { class: "info d-flex align-items-center" }, [
                e("div", { class: "container" }, [
                    e("div", { class: "row justify-content-center" }, [
                        e("div", { class: "col-lg-6 text-center" }, [
                            e("h2", { "data-aos": "fade-down" }, [
                                t("Feliz Aniversario "),
                                e("span", null, "Bolita"),
                            ]),
                            e(
                                "p",
                                { "data-aos": "fade-up" },
                                "22 años han pasado desde que nació la niña mas hermosa, inteligente y dedicada que el mundo ha visto. "
                            ),
                            e(
                                "a",
                                {
                                    "data-aos": "fade-up",
                                    "data-aos-delay": "200",
                                    href: "#felicitaciones",
                                    class: "btn-get-started",
                                },
                                "Felicidades"
                            ),
                        ]),
                    ]),
                ]),
            ]),
            e(
                "div",
                {
                    id: "hero-carousel",
                    class: "carousel slide",
                    "data-bs-ride": "carousel",
                    "data-bs-interval": "5000",
                },
                [
                    e("div", {
                        class: "carousel-item active",
                        style: {
                            "background-image":
                                "url(assets/img/hero-carousel/bola-3.jpeg)",
                        },
                    }),
                    e("div", {
                        class: "carousel-item",
                        style: {
                            "background-image":
                                "url(assets/img/hero-carousel/bola-4.jpeg)",
                        },
                    }),
                    e("div", {
                        class: "carousel-item",
                        style: {
                            "background-image":
                                "url(assets/img/hero-carousel/bola-5.jpeg)",
                        },
                    }),
                    e("div", {
                        class: "carousel-item",
                        style: {
                            "background-image":
                                "url(assets/img/hero-carousel/bola-6.jpeg)",
                        },
                    }),
                    e(
                        "a",
                        {
                            class: "carousel-control-prev",
                            href: "#hero-carousel",
                            role: "button",
                            "data-bs-slide": "prev",
                        },
                        [
                            e("span", {
                                class: "carousel-control-prev-icon bi bi-chevron-left",
                                "aria-hidden": "true",
                            }),
                        ]
                    ),
                    e(
                        "a",
                        {
                            class: "carousel-control-next",
                            href: "#hero-carousel",
                            role: "button",
                            "data-bs-slide": "next",
                        },
                        [
                            e("span", {
                                class: "carousel-control-next-icon bi bi-chevron-right",
                                "aria-hidden": "true",
                            }),
                        ]
                    ),
                ]
            ),
        ],
        -1
    );function d(u,h,m,b,g,f){return o(),s(l,null,[c,n],64)}const x=a(r,[["render",d]]);export{x as default};
