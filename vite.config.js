import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            input: ["resources/css/layout_Nav_home.css"],
            input: ["resources/css/login.css"],
            input: ["resources/css/liberary.css"],
            input: ["resources/css/Material_registration.css"],
            input: ["resources/css/student_create_account.css"],
            input: ["resources/css/welecome_message.css"],
            refresh: true,
        }),
    ],
});
