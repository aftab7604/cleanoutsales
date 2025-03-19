async function getPostalData(zipCode) {
    const url = `https://api.zippopotam.us/us/${zipCode}`;

    try {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(response.statusText);
        }

        const data = await response.json();

        return data;
    }
    catch (error) {
        return error;
    }
}