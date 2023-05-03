import tweepy
api_key = "026dEJ6nuBIFONvbal8RfuZtb"
api_secret = "7RpVUhLSkEBTitSzn70Po8ocXK4HIkp83UMRCZjhw9h80s61Sr"
bearer_token =r"AAAAAAAAAAAAAAAAAAAAADaqkgEAAAAAejF5Yg6eQSSbwFCjtEQ%2F58Lw6sw%3DkdGCxpOw1ssaiVQvgUAS8m9i8bB1C67tHMxaVn3EMoIYjOab7b"
access_token = "1604379731247661056-L6t8iNwmFYVTR13qOcP29B066Js1EC"
access_token_secret = "2cs2VGjrWKMcisFgJMCkNpeD66DUOFmNh5ed3KEoFrNfK"
client = tweepy.Client(bearer_token,api_key,api_secret,access_token,access_token_secret)
auth = tweepy.OAuth1UserHandler(api_key,api_secret,access_token,access_token_secret)
api = tweepy.API(auth)
f=open("C:/xampp2/htdocs/5th sem/tweet.txt",'r')
file1=str(f.read())
client.create_tweet(text=file1)