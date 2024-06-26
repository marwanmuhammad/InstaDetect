from PIL import Image
import sys
import tensorflow as tf

# Load your model
model_path = 'The_new_model.h5'
loaded_model = tf.keras.models.load_model(model_path)

# Preprocess the image
def preprocess(img):
    img = img.resize((244, 224))  # Corrected dimensions
    img_array = tf.keras.preprocessing.image.img_to_array(img)
    img_array = tf.expand_dims(img_array, 0)
    return img_array


# Make predictions with suppressed output
def predict(img_array):
    predictions = loaded_model.predict(img_array, verbose=0)
    class_labels = ['Glioma', 'Meningioma', 'No Tumor', 'Pituitary']
    score = tf.nn.softmax(predictions[0])
    return class_labels[tf.argmax(score)]


if __name__ == '__main__':
    if len(sys.argv) != 2:
        # Exit if the image path is not provided
        sys.exit(1)

    img_path = sys.argv[1]
    img = Image.open(img_path)

    # Preprocess image
    img_array = preprocess(img)

    # Make predictions
    predicted_class = predict(img_array)

    # Print the prediction result
    print(predicted_class)
