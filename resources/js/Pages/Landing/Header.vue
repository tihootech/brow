<script setup>
    import banner from "@/../img/slide-1.png";
    import logo from "@/../img/logo.svg";
</script>

<template>
    <main>
        <header>
            <img :src="logo" alt="Logo" class="logo" />
            <nav class="menu">
                <a href="#" class="menu-link"> {{ __("BROWSE MOVIES") }} </a>
                <a href="#" class="menu-link"> {{ __("FIND FESTIVALS") }} </a>
                <a href="#" class="menu-link"> {{ __("START SELLING") }} </a>
                <a href="#" class="menu-link"> {{ __("CONTACT US") }} </a>
            </nav>
            <nav class="actions">
                <a href="#" class="menu-link"> {{ __("BUY") }} </a>
                <a href="#" class="menu-link"> {{ __("SELL") }} </a>
                <a href="#" class="menu-link"> {{ __("SIGN IN") }} </a>
            </nav>
        </header>

        <section class="slider" :style="`background-image:url(${banner})`">
            <div class="hero">
                <h1 class="hero-title">
                    {{
                        __(
                            "ONE OF THE GRATEST MARKET PLACES FOR FILM & TELEVISION RIGHTS"
                        )
                    }}
                </h1>
                <p class="hero-text">
                    {{
                        __(
                            "The perfect solution for companies of all sizes to get films right for their different purposes."
                        )
                    }}
                </p>
                <div class="hero-btns">
                    <button type="button" class="btn primary-btn">
                        {{ __("BECOME SELLER") }}
                    </button>
                    <button type="button" class="btn light-btn">
                        {{ __("BECOME BUYER") }}
                    </button>
                </div>
                <div class="hero-arrows">
                    <button type="button" class="btn">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button type="button" class="btn">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="stats">
                <div class="stat-item">
                    <strong> {{ Math.random().toFixed(2) * 100 }} </strong>
                    <span> {{ __("LOYAL USERS") }} </span>
                </div>
                <div class="stat-item">
                    <strong> {{ Math.random().toFixed(2) * 100 }} </strong>
                    <span> {{ __("DIGITAL CONTENT") }} </span>
                </div>
                <div class="stat-item">
                    <strong> {{ Math.random().toFixed(2) * 100 }} </strong>
                    <span> {{ __("DIGITAL CONTENT") }} </span>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
export default {
    data() {
        return {};
    },
};
</script>

<style lang="scss" scoped>

header {
    display: flex;
    padding: 16px 120px;
    position: fixed;
    top: 0;
    width: 100%;
    height: 64px;
    background-color: var(--glass);

    .logo {
        width: 32px;
        height: 32px;
    }

    .menu {
    }

    .actions {
        margin-left: auto;
    }

    nav > .menu-link {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 500;
        line-height: 20px;
        letter-spacing: 0em;
    }
}

.slider {
    height: 90vh;
    background-size: cover;
    display: flex;
    justify-content: space-evenly;
    align-items: flex-end;
    padding: 64px;

    .hero,
    .stats {
        display: flex;
        background-color: var(--glass);
        border-radius: 4px;
        padding: 24px;
        gap: 16px;
    }

    .hero {
        flex-direction: column;
        max-width: 592px;

        .hero-title {
            font-size: 28px;
            font-weight: 900;
            line-height: 42px;
            letter-spacing: 0em;
            color: var(--black);
        }

        .hero-text {
            color: var(--gray);
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0em;
        }

        .hero-btns > button {
            text-transform: uppercase;
            margin-right: 8px;
            font-size: 14px;
            font-weight: 900;
            line-height: 24px;
            letter-spacing: 0.04em;
        }

        .hero-arrows {
            display: flex;
            justify-content: flex-end;
            gap: 0 8px;

            button {
                height: 40px;
                width: 40px;

                i {
                    font-size: 18px;
                }
            }
        }
    }

    .stats {
        flex-direction: row;
        max-width: 500px;

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;

            strong {
                color: var(--darkred);
                font-weight: 900;
                font-size: 24px;
                line-height: 40px;
            }

            span {
                color: var(--gray);
                font-weight: 500;
                font-size: 14px;
                line-height: 20px;
            }
        }

        .stat-item:not(:first-child) {
            border-left: 2px solid var(--white);
            padding-left: 16px;
        }
    }
}
</style>
