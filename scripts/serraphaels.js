function output() {
    const data = {
        fullName: "Ser"
        lastName:  "Raphaels",
        language: "JavaScript",
        id: "HNG-04554",
        email: "oseraphaels@gmail.com"
    };

    return JSON.stringify(data);
}

console.log(output());