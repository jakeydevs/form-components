# Form Components

Package of inputs and design elements for forms based on Tailwind UI - very opinionated!

## Components

### Form Sections

Used to provide design scaffolding around a form. The SLOT should be used for the form content

`<x-form-components-section title="test" description="test descreiption" type="stacked" />`

| Variable    | Required - Default | Description                      |
| ----------- | ------------------ | -------------------------------- |
| title       | Yes                | Form title                       |
| description | No - null          | Form description                 |
| type        | No - two-col       | Design type - two-col or stacked |

### Form Inputs

Main HTML input. Can be typed into different options (text, datetime-local, number etc)

`<x-form-components-input name="published_at" type="datetime-local" label="Article Published Date" help="Help" :bind="@$article" :value="now()->subMinutes(10)"/>`

| Variable | Required - Default | Description                                    |
| -------- | ------------------ | ---------------------------------------------- |
| name     | Yes                | The input name - will come through in POST     |
| type     | No - text          | Type of input                                  |
| label    | No                 | Label text - if omitted, label is not rendered |
| help     | No                 | Help text - if omitted, help is not rendered   |
| bind     | No                 | Model the value is binded to                   |

Any extra attributes are cast onto the Input directly such as required and value (default)

### Select

Select box with dropdown

```
<x-form-components-select
name="select-model"
label="Models"
help="Eloquent"
:bind="@$article"
:options="$users"
track="name"
display="email"
:value="$users->last()->name"
/>
```

| Variable | Required - Default | Description                                                    |
| -------- | ------------------ | -------------------------------------------------------------- |
| name     | Yes                | The input name - will come through in POST                     |
| options  | Yes                | Either an array or object                                      |
| label    | No                 | Label text - if omitted, label is not rendered                 |
| help     | No                 | Help text - if omitted, help is not rendered                   |
| track    | No - id            | Will become the KEY if an object is used for options           |
| display  | No - text          | Will become what is displayed if an object is used for options |
| bind     | No                 | Model the value is binded to                                   |

Any extra attributes are cast onto the SELECT directly such as required
