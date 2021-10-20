import pandas as pd

df = pd.read_csv('test.csv')

import pickle

scaler = pickle.load(open('icu_scaler.sav', 'rb'))
df = scaler.transform(df)



print('XGB')
clf_xgb = pickle.load(open('icu_xgb.sav','rb'))
print(clf_xgb.predict(df))
print(x[0])
