import Tool from './pages/Tool'
import {default as InlineTextIndexField} from "./components/InlineTextField/IndexField.vue";
import {default as InlineTextDetailField} from "./components/InlineTextField/DetailField.vue";

Nova.booting((app, store) => {
    Nova.inertia('Custom', Tool);

    app.component('index-inline-text-field', InlineTextIndexField);
    app.component('detail-inline-text-field', InlineTextDetailField);
})
